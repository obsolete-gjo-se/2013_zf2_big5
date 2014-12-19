<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminUpdateServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {

        $mapperEntityObj = $sm->get('ControllerEntity-Jbig3Resource');
        $formObj = $sm->get('ControllerAdminUpdateForm-Jbig3Resource');
        $mapperObj = $sm->get('ControllerMapper-Jbig3Resource');

        $event = 'controller-update';

        $srv = new ControllerAdminUpdateService($mapperEntityObj, $formObj, $mapperObj);

        $srv->setEvent($event);

        return $srv;
    }
}