<?php

namespace SEPConseil\ArduousnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ard_value
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SEPConseil\ArduousnessBundle\Entity\ardValueRepository")
 */
class ardValue
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
     * @var string
     *
     * @ORM\Column(name="valueString", type="string", length=255, nullable=true)
     */
    private $valueString;

    /**
     * @var integer
     *
     * @ORM\Column(name="valueInt", type="integer", nullable=true)
     */
    private $valueInt;

    /**
     * @var float
     *
     * @ORM\Column(name="valueFloat", type="float", nullable=true)
     */
    private $valueFloat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valueBoolean", type="boolean", nullable=true)
     */
    private $valueBoolean;


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
     * Set valueString
     *
     * @param string $valueString
     * @return ard_value
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;

        return $this;
    }

    /**
     * Get valueString
     *
     * @return string 
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Set valueInt
     *
     * @param integer $valueInt
     * @return ard_value
     */
    public function setValueInt($valueInt)
    {
        $this->valueInt = $valueInt;

        return $this;
    }

    /**
     * Get valueInt
     *
     * @return integer 
     */
    public function getValueInt()
    {
        return $this->valueInt;
    }

    /**
     * Set valueFloat
     *
     * @param float $valueFloat
     * @return ard_value
     */
    public function setValueFloat($valueFloat)
    {
        $this->valueFloat = $valueFloat;

        return $this;
    }

    /**
     * Get valueFloat
     *
     * @return float 
     */
    public function getValueFloat()
    {
        return $this->valueFloat;
    }

    /**
     * Set valueBoolean
     *
     * @param boolean $valueBoolean
     * @return ard_value
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;

        return $this;
    }

    /**
     * Get valueBoolean
     *
     * @return boolean 
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }
}
