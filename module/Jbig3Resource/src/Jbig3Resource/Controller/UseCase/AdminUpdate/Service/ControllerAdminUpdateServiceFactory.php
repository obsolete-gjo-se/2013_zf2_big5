<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Service;

use Jbig3Resource\Controller\UseCase\AdminUpdate\Factory\ControllerAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminUpdateServiceFactory extends ControllerAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ControllerAdminUpdateService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj(), 'id')
            ->setMapperObj($this->getMapperObj())
            ->setFormObj($this->getFormObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}