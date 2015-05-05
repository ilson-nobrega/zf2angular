<?php
namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Application\Entity\Categoria as CategoriaEntity;
class Categoria {

    private $em;
    
    //Dependency Injection
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function insert($data) {
        $categoriaEntity = new CategoriaEntity();
        $categoriaEntity->setNome($data['nome']);
        $categoriaEntity->setDescricao($data['descricao']);
        $this->em->persist($categoriaEntity);
        $this->em->flush();
        return $categoriaEntity;
    }
    
    public function update(array $data) {
        $categoriaEntity = $this->em
                ->getReference('Application\Entity\Categoria', $data['id']);
        $categoriaEntity->setNome($data['nome']);
        $categoriaEntity->setDescricao($data['descricao']);
        $this->em->persist($categoriaEntity);
        $this->em->flush();
        return $categoriaEntity;
    }
    
    public function delete($id) {
        $categoriaEntity = $this->em
                ->getReference('Application\Entity\Categoria', $id);
        $this->em->remove($categoriaEntity);
        $this->em->flush();
        return $id;
    }
}
