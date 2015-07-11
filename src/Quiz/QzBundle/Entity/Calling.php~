<?php

namespace Quiz\QzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calling
 *
 * @ORM\Table(name="call")
 * @ORM\Entity
 */
class Calling
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
     * @ORM\OneToOne(targetEntity="Quiz\QzBundle\Entity\Caller", cascade={"persist"})
     */
    private $callerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="callDate", type="datetime")
     */
    private $callDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="assignementDate", type="datetime")
     */
    private $assignementDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="callNumber", type="integer")
     */
    private $callNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set callerId
     *
     * @param integer $callerId
     * @return Calling
     */
    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;

        return $this;
    }

    /**
     * Get callerId
     *
     * @return integer 
     */
    public function getCallerId()
    {
        return $this->callerId;
    }

    /**
     * Set callDate
     *
     * @param \DateTime $callDate
     * @return Calling
     */
    public function setCallDate($callDate)
    {
        $this->callDate = $callDate;

        return $this;
    }

    /**
     * Get callDate
     *
     * @return \DateTime 
     */
    public function getCallDate()
    {
        return $this->callDate;
    }

    /**
     * Set assignementDate
     *
     * @param \DateTime $assignementDate
     * @return Calling
     */
    public function setAssignementDate($assignementDate)
    {
        $this->assignementDate = $assignementDate;

        return $this;
    }

    /**
     * Get assignementDate
     *
     * @return \DateTime 
     */
    public function getAssignementDate()
    {
        return $this->assignementDate;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Calling
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Calling
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set callNumber
     *
     * @param integer $callNumber
     * @return Calling
     */
    public function setCallNumber($callNumber)
    {
        $this->callNumber = $callNumber;

        return $this;
    }

    /**
     * Get callNumber
     *
     * @return integer 
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Calling
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Calling
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
