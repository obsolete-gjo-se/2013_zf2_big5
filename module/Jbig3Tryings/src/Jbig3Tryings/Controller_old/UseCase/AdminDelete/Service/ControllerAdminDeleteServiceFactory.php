<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminDeleteServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        $mapperEntityObj = null;
        $formObj = null;
        $mapperObj = $sm->get('ControllerMapper-Jbig3Resource');

        $event = 'controller-admin-delete';

        $srv = new ControllerAdminDeleteService($mapperEntityObj, $formObj, $mapperObj);

        $srv->setEvent($event);

        return $srv;
    }
}