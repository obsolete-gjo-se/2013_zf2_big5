<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Factory;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ControllerAdminCreateFactoryAbstract extends ControllerFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ControllerAdminCreateService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }

    public function getFormObj()
    {
        if(!$this->formObj){
            $this->setFormObj($this->getSmObj()->get('ControllerAdminCreateForm-Jbig3Resource'));
        }
        return $this->formObj;
    }
}