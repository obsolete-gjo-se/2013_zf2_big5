<?php
namespace Jbig3Resource\Module\UseCase\AdminRead\Factory;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ModuleAdminReadFactoryAbstract extends ModuleFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ModuleAdminReadService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }
}