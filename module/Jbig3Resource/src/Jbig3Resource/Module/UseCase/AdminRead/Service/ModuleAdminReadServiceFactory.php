<?php
namespace Jbig3Resource\Module\UseCase\AdminRead\Service;

use Jbig3Resource\Module\UseCase\AdminRead\Factory\ModuleAdminReadFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleAdminReadServiceFactory extends ModuleAdminReadFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ModuleAdminReadService();

        $service
            ->setMapperObj($this->getMapperObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}