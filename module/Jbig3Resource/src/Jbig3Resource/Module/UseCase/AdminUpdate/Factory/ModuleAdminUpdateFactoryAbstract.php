<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Factory;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class ModuleAdminUpdateFactoryAbstract extends ModuleFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ModuleAdminUpdateService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }

    public function getFormObj()
    {
        if(!$this->formObj){
            $this->setFormObj($this->getSmObj()->get('ModuleAdminUpdateForm-Jbig3Resource'));
        }
        return $this->formObj;
    }
}