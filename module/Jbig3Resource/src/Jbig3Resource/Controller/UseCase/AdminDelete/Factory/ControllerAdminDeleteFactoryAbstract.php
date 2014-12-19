<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Factory;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ControllerAdminDeleteFactoryAbstract extends ControllerFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getServiceObj()
    {
        if(!$this->serviceObj){
            $this->setServiceObj($this->getSmObj()->get('ControllerAdminDeleteService-Jbig3Resource'));
        }
        return $this->serviceObj;
    }
}