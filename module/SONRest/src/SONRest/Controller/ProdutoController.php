<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 02/05/2015 - 17:13
 */

namespace SONRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class ProdutoController extends AbstractRestfulController{

    //get
    public function getList() {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $data = $em->getRepository('Application\Entity\Produto')->findAll();
        return $data;
    }

    //get
    public function get($id) {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $data = $em->getRepository('Application\Entity\Produto')->find($id);
        return $data;
    }

    //post
    public function create($data) {
        $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Produto');
        $categoria = $serviceCategoria->insert($data);
        if($categoria){
            return $categoria;
        }else{
            return array('success' => false);
        }
    }

    //put
    public function update($id, $data) {
        $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Produto');
        $param = array_merge(array('id' => $id), $data);
        $categoria = $serviceCategoria->update($param);
        if($categoria){
            return $categoria;
        }else{
            return array('success' => false);
        }
    }

    //delete
    public function delete($id) {
        $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Produto');
        $categoria = $serviceCategoria->delete($id);
        if($categoria){
            return $categoria;
        }else{
            return array('success' => false);
        }
    }
}