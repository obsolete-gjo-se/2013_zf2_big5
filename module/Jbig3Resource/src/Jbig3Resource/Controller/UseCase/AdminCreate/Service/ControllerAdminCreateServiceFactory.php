<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Service;

use Jbig3Resource\Controller\UseCase\AdminCreate\Factory\ControllerAdminCreateFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminCreateServiceFactory extends ControllerAdminCreateFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $service = new ControllerAdminCreateService();

        $service
            ->setOwnerEntityObj($this->getOwnerEntityObj())
            ->setMapperObj($this->getMapperObj())
            ->setFormObj($this->getFormObj())
            ->attachListenerObj($this->getListenerObj());

        return $service;
    }
}