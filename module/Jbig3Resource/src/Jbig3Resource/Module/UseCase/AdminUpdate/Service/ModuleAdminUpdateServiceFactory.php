<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Service;

use Jbig3Resource\Module\UseCase\AdminUpdate\Factory\ModuleAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ModuleAdminUpdateServiceFactory extends ModuleAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ModuleAdminUpdateService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj(), 'id')
            ->setMapperObj($this->getMapperObj())
            ->setFormObj($this->getFormObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}