<?php

namespace Quiz\QzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="questionnaire")
 * @ORM\Entity(repositoryClass="Quiz\QzBundle\Repository\QuestionnaireRepository")
 * @ORM\Entity
 */
class Questionnaire
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
     * @ORM\JoinColumn(name="language_id")
     * @ORM\ManyToOne(targetEntity="Quiz\QzBundle\Entity\Language", cascade={"persist"})
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="welcomeMessage", type="text")
     */
    private $welcomeMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255)
     */
    private $attachement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isGenerated", type="boolean")
     */
    private $isGenerated;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationSms", type="text")
     */
    private $confirmationSms;

    /**
     * @var string
     *
     * @ORM\Column(name="finalMessage", type="text")
     */
    private $finalMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;


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
     * Set description
     *
     * @param string $description
     * @return Questionnaire
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set welcomeMessage
     *
     * @param string $welcomeMessage
     * @return Questionnaire
     */
    public function setWelcomeMessage($welcomeMessage)
    {
        $this->welcomeMessage = $welcomeMessage;

        return $this;
    }

    /**
     * Get welcomeMessage
     *
     * @return string 
     */
    public function getWelcomeMessage()
    {
        return $this->welcomeMessage;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Questionnaire
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
     * Set isGenerated
     *
     * @param boolean $isGenerated
     * @return Questionnaire
     */
    public function setIsGenerated($isGenerated)
    {
        $this->isGenerated = $isGenerated;

        return $this;
    }

    /**
     * Get isGenerated
     *
     * @return boolean 
     */
    public function getIsGenerated()
    {
        return $this->isGenerated;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Questionnaire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set confirmationSms
     *
     * @param string $confirmationSms
     * @return Questionnaire
     */
    public function setConfirmationSms($confirmationSms)
    {
        $this->confirmationSms = $confirmationSms;

        return $this;
    }

    /**
     * Get confirmationSms
     *
     * @return string 
     */
    public function getConfirmationSms()
    {
        return $this->confirmationSms;
    }

    /**
     * Set finalMessage
     *
     * @param string $finalMessage
     * @return Questionnaire
     */
    public function setFinalMessage($finalMessage)
    {
        $this->finalMessage = $finalMessage;

        return $this;
    }

    /**
     * Get finalMessage
     *
     * @return string 
     */
    public function getFinalMessage()
    {
        return $this->finalMessage;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Questionnaire
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set languageId
     *
     * @param \Quiz\QzBundle\Entity\Language $languageId
     * @return Questionnaire
     */
    public function setLanguageId(\Quiz\QzBundle\Entity\Language $languageId = null)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return \Quiz\QzBundle\Entity\Language 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }
}
