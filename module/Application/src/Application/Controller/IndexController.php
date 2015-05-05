<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Categoria;
use Application\Entity\Produto;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $repo = $em->getRepository("Application\Entity\Categoria");
        
//        $categoriaService = $this->getServiceLocator()->get('Application\Service\Categoria');
//        $categoriaService->delete(5);
        
//        $produtoService = $this->getServiceLocator()->get('Application\Service\Produto');
//        $produtoService->insert(array('nome' => 'God of War', 'fk_categoria' => 1));
//        $produtoService->delete(2);
        
        $categorias = $repo->findAll();
        return new ViewModel(array('categorias' => $categorias));
    }
}
