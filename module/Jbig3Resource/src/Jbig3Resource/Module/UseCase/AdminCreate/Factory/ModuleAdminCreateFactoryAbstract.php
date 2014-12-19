<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Factory;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ModuleAdminCreateFactoryAbstract extends ModuleFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ModuleAdminCreateService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }

    public function getFormObj()
    {
        if(!$this->formObj){
            $this->setFormObj($this->getSmObj()->get('ModuleAdminCreateForm-Jbig3Resource'));
        }
        return $this->formObj;
    }
}