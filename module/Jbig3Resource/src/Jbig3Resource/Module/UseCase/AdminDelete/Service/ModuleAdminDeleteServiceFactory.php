<?php
namespace Jbig3Resource\Module\UseCase\AdminDelete\Service;

use Jbig3Resource\Module\UseCase\AdminDelete\Factory\ModuleAdminDeleteFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleAdminDeleteServiceFactory extends ModuleAdminDeleteFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ModuleAdminDeleteService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj(), 'id')
            ->setMapperObj($this->getMapperObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}