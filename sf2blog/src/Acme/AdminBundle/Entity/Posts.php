<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="garchig", type="string", length=255, nullable=false)
     */
    private $garchig;

    /**
     * @var string
     *
     * @ORM\Column(name="myPost", type="text", nullable=false)
     */
    private $mypost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="date", nullable=false)
     */
    private $time;



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
     * Set garchig
     *
     * @param string $garchig
     * @return Posts
     */
    public function setGarchig($garchig)
    {
        $this->garchig = $garchig;
    
        return $this;
    }

    /**
     * Get garchig
     *
     * @return string 
     */
    public function getGarchig()
    {
        return $this->garchig;
    }

    /**
     * Set mypost
     *
     * @param string $mypost
     * @return Posts
     */
    public function setMypost($mypost)
    {
        $this->mypost = $mypost;
    
        return $this;
    }

    /**
     * Get mypost
     *
     * @return string 
     */
    public function getMypost()
    {
        return $this->mypost;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Posts
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
}
