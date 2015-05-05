<?php

namespace Application\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Entity\Categoria;

class LoadCategoria extends AbstractFixture{
    
    public function load(ObjectManager $manager) {
        $categoria = new Categoria();
        $categoria->setNome("Livros");
        $manager->persist($categoria);
        $manager->flush();
        $this->addReference('categoria', $categoria);
    }

}
