<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Factory;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class ControllerAdminUpdateFactoryAbstract extends ControllerFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ControllerAdminUpdateService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }

    public function getFormObj()
    {
        if(!$this->formObj){
            $this->setFormObj($this->getSmObj()->get('ControllerAdminUpdateForm-Jbig3Resource'));
        }
        return $this->formObj;
    }
}