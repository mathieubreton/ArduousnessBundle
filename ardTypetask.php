<?php

namespace SEPConseil\ArduousnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ard_typetask
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SEPConseil\ArduousnessBundle\Entity\ardTypetaskRepository")
 */
class ardTypetask
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
     * @ORM\Column(name="libelleTypeTask", type="string", length=255)
     */
    private $libelleTypeTask;

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
     * Set libelleTypeTask
     *
     * @param string $libelleTypeTask
     * @return ardTypetask
     */
    public function setLibelleTypeTask($libelleTypeTask)
    {
        $this->libelleTypeTask = $libelleTypeTask;

        return $this;
    }

    /**
     * Get libelleTypeTask
     *
     * @return string 
     */
    public function getLibelleTypeTask()
    {
        return $this->libelleTypeTask;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->columns = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
