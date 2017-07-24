<?php

namespace SEPConseil\ArduousnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ard_column
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SEPConseil\ArduousnessBundle\Entity\ardColumnRepository")
 */
class ardColumn
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
     * @ORM\Column(name="libelleColumn", type="string", length=255)
     */
    private $libelleColumn;

    /**
     * @ORM\ManyToOne(targetEntity="SEPConseil\ArduousnessBundle\Entity\ardValue")
     * @ORM\JoinColumn(name="valuesId", referencedColumnName="id")
     */
    private $values;

    /**
     * @ORM\ManyToMany(targetEntity="SEPConseil\ArduousnessBundle\Entity\ardTypetask")
     */
    private $typestask;

    /**
     * @ORM\OneToMany(targetEntity="Tact\SepBundle\Entity\Unit", mappedBy="units")
     * @ORM\JoinColumn(name="unitsId", referencedColumnName="id")
     */
    private $units;


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
     * Set libelleColumn
     *
     * @param string $libelleColumn
     * @return ardColumn
     */
    public function setLibelleColumn($libelleColumn)
    {
        $this->libelleColumn = $libelleColumn;

        return $this;
    }

    /**
     * Get libelleColumn
     *
     * @return string 
     */
    public function getLibelleColumn()
    {
        return $this->libelleColumn;
    }

    /**
     * Set values
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardValue $values
     * @return ardColumn
     */
    public function setValues(\SEPConseil\ArduousnessBundle\Entity\ardValue $values = null)
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Get values
     *
     * @return \SEPConseil\ArduousnessBundle\Entity\ardValue 
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set units
     *
     * @param \Tact\SepBundle\Entity\Unit $units
     * @return ardColumn
     */
    public function setUnits(\Tact\SepBundle\Entity\Unit $units = null)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return \Tact\SepBundle\Entity\Unit 
     */
    public function getUnits()
    {
        return $this->units;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typestask = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typestask
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardTypetask $typestask
     * @return ardColumn
     */
    public function addTypestask(\SEPConseil\ArduousnessBundle\Entity\ardTypetask $typestask)
    {
        $this->typestask[] = $typestask;

        return $this;
    }

    /**
     * Remove typestask
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardTypetask $typestask
     */
    public function removeTypestask(\SEPConseil\ArduousnessBundle\Entity\ardTypetask $typestask)
    {
        $this->typestask->removeElement($typestask);
    }

    /**
     * Get typestask
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypestask()
    {
        return $this->typestask;
    }

    /**
     * Add units
     *
     * @param \Tact\SepBundle\Entity\Unit $units
     * @return ardColumn
     */
    public function addUnit(\Tact\SepBundle\Entity\Unit $units)
    {
        $this->units[] = $units;

        return $this;
    }

    /**
     * Remove units
     *
     * @param \Tact\SepBundle\Entity\Unit $units
     */
    public function removeUnit(\Tact\SepBundle\Entity\Unit $units)
    {
        $this->units->removeElement($units);
    }
}
