<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Service;

use Jbig3Resource\Module\UseCase\AdminCreate\Factory\ModuleAdminCreateFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleAdminCreateServiceFactory extends ModuleAdminCreateFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ModuleAdminCreateService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj())
            ->setMapperObj($this->getMapperObj())
            ->setFormObj($this->getFormObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}