<?php
namespace Jbig3Resource\Module\UseCase\AdminDelete\Factory;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ModuleAdminDeleteFactoryAbstract extends ModuleFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ModuleAdminDeleteService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }
}