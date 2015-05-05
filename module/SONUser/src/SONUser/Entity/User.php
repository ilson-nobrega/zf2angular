<?php

namespace SONUser\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="z2fangularjs.user_id_seq", initialValue=1, allocationSize=100)
     * @var type 
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     * @var type string
     */
    private $nome;
    
    /**
     * @ORM\Column(type="string")
     * @var type string
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     * @var type string
     */
    private $password;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setPassword($password) {
        $this->password = sha1($password);
        return $this;
    }


}
