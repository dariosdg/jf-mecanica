<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class VehiculosController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {
        return new ViewModel();
    }
    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
    }
}

