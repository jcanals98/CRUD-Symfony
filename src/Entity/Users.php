<?php

namespace App\Entity;

use Doctrine\ORM\mapping as ORM;

/**
 * Users
 * 
 * @ORM\table(name="users")
 * @ORM\Entity
 */

 class Users{
    /**
     * @var int
     * 
    * @ORM\column(name="idUser", type="integer", nullable=false)
    * @ORM\id
    * @ORM\GeneratedValue(strategy="IDENTITY)
    */
    private $iduser;

    /**
     * @var string
     * 
    * @ORM\column(name="name", type="string", length=120, nullable=false)
    */
    private $name;

    /**
     * @var string
     * 
    * @ORM\column(name="name", type="string", length=120, nullable=false)
    */
    private $lastname;

    /**
     * @var string
     * 
    * @ORM\column(name="lastname", type="string", length=120, nullable=false)
    */
    private $email;

    /**
     * @var string
     * 
    * @ORM\column(name="password", type="string", length=120, nullable=false)
    */
    private $password;

    /**
     * @var int
     * 
    * @ORM\column(name="status", type="integer", length=120, nullable=false)
    */
    private $status;


    /**
     * Get the value of iduser
     *
     * @return  int
     */ 
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser
     *
     * @param  int  $iduser
     *
     * @return  self
     */ 
    public function setIduser(int $iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string  $lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  int
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  int  $status
     *
     * @return  self
     */ 
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }
 }