<?php

namespace Quiz\QzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Response
 *
 * @ORM\Table(name="response")
 * @ORM\Entity(repositoryClass="Quiz\QzBundle\Entity\ResponseRepository")
 */
class Response
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\JoinColumn(name="call_id")
     * @ORM\ManyToOne(targetEntity="Quiz\QzBundle\Entity\Caller", cascade={"persist"})
     */
    private $callId;

    /**
     * @ORM\JoinColumn(name="question_id")
     * @ORM\ManyToOne(targetEntity="Quiz\QzBundle\Entity\Question", cascade={"persist"})
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255)
     */
    private $attachement;
    
    /**
     * @Assert\File(
     * maxSize = "2M",
     *     mimeTypes = {"audio/x-wav"},
     *     mimeTypesMessage = "The selected file does not correspond to a valid file"
     * )
     * @ORM\JoinColumn(nullable=false)
     */
    public $attachement_file;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set callId
     *
     * @param integer $callId
     * @return Response
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * Get callId
     *
     * @return integer 
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Set questionId
     *
     * @param integer $questionId
     * @return Response
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Response
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Response
     */
    public function setAttachement($attachement)
    {
        $this->attachement = $attachement;

        return $this;
    }

    /**
     * Get attachement
     *
     * @return string 
     */
    public function getAttachement()
    {
        return $this->attachement;
    }
    
    public function getAbsolutePath()
    {
        return null === $this->attachement ? null : $this->getUploadRootDir().'/'.$this->attachement;
    }

    public function getWebPath()
    {
        return null === $this->attachement ? null : $this->getUploadDir().'/'.$this->attachement;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
       
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        
        return 'uploads/attachements';
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    { 
        if (null !== $this->attachement_file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->attachement = $this->id.date('h-m-s').'.'.$this->attachement_file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->attachement_file) {
            return;
        }
        
        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->attachement_file->move($this->getUploadRootDir(), $this->id.date('h-m-s').'.'.$this->attachement_file->guessExtension());
       //echo $this->attachement;exit();
        unset($this->attachement_file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}
