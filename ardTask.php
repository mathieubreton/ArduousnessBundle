<?php

namespace SEPConseil\ArduousnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ard_task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SEPConseil\ArduousnessBundle\Entity\ardTaskRepository")
 */
class ardTask
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
     * @ORM\Column(name="libelleTask", type="string", length=255)
     */
    private $libelleTask;

    /**
     * @ORM\ManyToMany(targetEntity="SEPConseil\ArduousnessBundle\Entity\ardTypetask")
     */
    private $tasktypes;

    /**
     * @ORM\ManyToOne(targetEntity="SEPConseil\ArduousnessBundle\Entity\ardValue")
     */
    private $values;

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
     * Set libelleTask
     *
     * @param string $libelleTask
     * @return ard_task
     */
    public function setLibelleTask($libelleTask)
    {
        $this->libelleTask = $libelleTask;

        return $this;
    }

    /**
     * Get libelleTask
     *
     * @return string 
     */
    public function getLibelleTask()
    {
        return $this->libelleTask;
    }

    /**
     * Set tasktypes
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes
     * @return ard_task
     */
    public function setTasktypes(\SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes = null)
    {
        $this->tasktypes = $tasktypes;

        return $this;
    }

    /**
     * Get tasktypes
     *
     * @return \SEPConseil\ArduousnessBundle\Entity\ardTypetask 
     */
    public function getTasktypes()
    {
        return $this->tasktypes;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasktypes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tasktypes
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes
     * @return ard_task
     */
    public function addTasktype(\SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes)
    {
        $this->tasktypes[] = $tasktypes;

        return $this;
    }

    /**
     * Remove tasktypes
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes
     */
    public function removeTasktype(\SEPConseil\ArduousnessBundle\Entity\ardTypetask $tasktypes)
    {
        $this->tasktypes->removeElement($tasktypes);
    }

    /**
     * Set values
     *
     * @param \SEPConseil\ArduousnessBundle\Entity\ardValue $values
     * @return ardTask
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
}
