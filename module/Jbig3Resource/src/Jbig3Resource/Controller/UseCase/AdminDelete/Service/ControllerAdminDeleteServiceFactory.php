<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Service;

use Jbig3Resource\Controller\UseCase\AdminDelete\Factory\ControllerAdminDeleteFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminDeleteServiceFactory extends ControllerAdminDeleteFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ControllerAdminDeleteService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj(), 'id')
            ->setMapperObj($this->getMapperObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}