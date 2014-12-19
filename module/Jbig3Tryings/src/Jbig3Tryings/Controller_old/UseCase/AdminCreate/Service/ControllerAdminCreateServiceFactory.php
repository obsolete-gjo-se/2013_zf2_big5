<?php
namespace Jbig3Resource\Controller\Usecase\AdminCreate\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerAdminCreateServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {

        $mapperEntityObj = $sm->get('ControllerEntity-Jbig3Resource');
        $formObj = $sm->get('ControllerAdminCreateForm-Jbig3Resource');
        $mapperObj = $sm->get('ControllerMapper-Jbig3Resource');

        $event = 'module-admin-create';

        $srv = new ControllerAdminCreateService($mapperEntityObj, $formObj, $mapperObj);

        $srv->setEvent($event);

        return $srv;
    }
}