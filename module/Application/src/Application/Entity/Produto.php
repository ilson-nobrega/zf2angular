<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Entity\ProdutoRepository")
 * @ORM\Table(name="produtos", schema="z2fangularjs")
 */
class Produto {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="z2fangularjs.produtos_id_seq", initialValue=1, allocationSize=100)
     * @var type int
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     * @var type string
     */
    private $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\Categoria")
     * @ORM\JoinColumn(name="fk_categoria", referencedColumnName="id")
     */
    private $categoria;
    
    /**
     * @ORM\Column(type="string")
     * @var type string
     */
    private $descricao;
    
    function getCategoria() {
        return $this->categoria;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setCategoria(Categoria $categoria) {
        $this->categoria = $categoria;
        return $this;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
}
