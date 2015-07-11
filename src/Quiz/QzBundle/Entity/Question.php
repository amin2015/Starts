<?php

namespace Quiz\QzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Quiz\QzBundle\Entity\Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="Quiz\QzBundle\Entity\QuestionRepository")
 */
class Question
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
     * @ORM\JoinColumn(name="questionnaire_id")
     * @ORM\ManyToOne(targetEntity="Quiz\QzBundle\Entity\Questionnaire", cascade={"persist"})
     */
    private $questionnaireId;

    /**
     * @var string
     *
     * @ORM\Column(name="questionText", type="string", length=100, nullable=true)
     */
    private $questionText;

    /**
     * @var string
     *
     * @ORM\Column(name="questionTextEn", type="string", length=100, nullable=true)
     */
    private $questionTextEn;

     /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255)
     */
    private $attachement;

    /**
     * @var integer
     *
     * @ORM\Column(name="responseType", type="integer")
     */
    private $responseType;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="mode", type="integer")
     */
    private $mode;
    
    
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
     * Set questionnaireId
     *
     * @param integer $questionnaireId
     * @return Question
     */
    public function setQuestionnaireId($questionnaireId)
    {
        $this->questionnaireId = $questionnaireId;

        return $this;
    }

    /**
     * Get questionnaireId
     *
     * @return integer 
     */
    public function getQuestionnaireId()
    {
        return $this->questionnaireId;
    }

    /**
     * Set questionText
     *
     * @param string $questionText
     * @return Question
     */
    public function setQuestionText($questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Get questionText
     *
     * @return string 
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Set questionTextEn
     *
     * @param string $questionTextEn
     * @return Question
     */
    public function setQuestionTextEn($questionTextEn)
    {
        $this->questionTextEn = $questionTextEn;

        return $this;
    }

    /**
     * Get questionTextEn
     *
     * @return string 
     */
    public function getQuestionTextEn()
    {
        return $this->questionTextEn;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Question
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

    /**
     * Set responseType
     *
     * @param integer $responseType
     * @return Question
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Get responseType
     *
     * @return integer 
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Question
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set mode
     *
     * @param integer $mode
     * @return Question
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return integer 
     */
    public function getMode()
    {
        return $this->mode;
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
