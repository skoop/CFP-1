<?php

namespace Cfp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Add talk
     *
     * @param \Cfp\TalkBundle\Entity\Talk $talk
     * @return User
     */
    public function addTalk(\Cfp\TalkBundle\Entity\Talk $talk)
    {
        $this->talks[] = $talk;
    
        return $this;
    }

    /**
     * Remove talk
     *
     * @param \Cfp\TalkBundle\Entity\Talk $talk
     */
    public function removeTalk(\Cfp\TalkBundle\Entity\Talk $talk)
    {
        $this->talks->removeElement($talk);
    }

    /**
     * Get talk
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTalks()
    {
        return $this->talks;
    }

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
     * Constructor
     */
    public function __construct()
    {
        $this->talks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}