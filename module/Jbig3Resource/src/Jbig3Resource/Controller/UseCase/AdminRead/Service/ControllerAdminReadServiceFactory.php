<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Service;

use Jbig3Resource\Controller\UseCase\AdminRead\Factory\ControllerAdminReadFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminReadServiceFactory extends ControllerAdminReadFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ControllerAdminReadService();

        $service
            ->setMapperObj($this->getMapperObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}