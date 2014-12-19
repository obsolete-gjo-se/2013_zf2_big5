<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Controller;

use Jbig3Resource\Controller\UseCase\AdminRead\Factory\ControllerAdminReadFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminReadControllerFactory extends ControllerAdminReadFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ControllerAdminReadController($this->getServiceObj());

        return $controller;
    }
}