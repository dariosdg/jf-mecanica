<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ClienteForm;

class ClientesController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();  
    }
    
    public function addAction() 
    {
        $form = new ClienteForm();
        $form->get('submit')->setValue('Add');
        return new ViewModel(['$form' => $form]);
    }
    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
    }
}
