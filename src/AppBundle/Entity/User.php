<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     *
     * @var Measurements|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Measurements", mappedBy="person")
     *
     */
    private $measurement;


    /**
     *
     * @var Cities|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Cities", mappedBy="user")
     *
     */
    private $region;


    public function __construct() {
        parent::__construct();
        $this->measurement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->region = new \Doctrine\Common\Collections\ArrayCollection();
    }

}