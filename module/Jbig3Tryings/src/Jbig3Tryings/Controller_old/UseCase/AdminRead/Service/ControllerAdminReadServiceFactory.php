<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminReadServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {

        $mapperEntityObj = null;
        $formObj = null;
        $mapperObj = $sm->get('ControllerMapper-Jbig3Resource');

        $event = 'controller-admin-read';

        $srv = new ControllerAdminReadService($mapperEntityObj, $formObj, $mapperObj);

        $srv->setEvent($event);

        return $srv;
    }
}