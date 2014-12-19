<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Controller;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminReadControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        $serviceObj = $sm->get('ControllerAdminReadService-Jbig3Resource');

        $viewKey = 'controllerAdminRead';

        $srv = new ControllerAdminReadController($serviceObj);

        $srv->setViewKey($viewKey);

        return $srv;
    }
}