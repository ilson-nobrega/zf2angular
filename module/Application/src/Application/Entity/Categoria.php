<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Entity\CategoriaRepository")
 * @ORM\Table(name="categorias", schema="z2fangularjs")
 */
class Categoria {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="z2fangularjs.categorias_id_seq", initialValue=1, allocationSize=100)
     * @var type int
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
    private $descricao;

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
}
