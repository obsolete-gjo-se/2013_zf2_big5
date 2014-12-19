<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Controller;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ControllerAdminDeleteControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        $translatorObj = $sm->get('translator');
        $serviceObj = $sm->get('ControllerAdminDeleteService-Jbig3Resource');

        $successRoute = 'resource-controller-admin-read';
        $successMessage = $translatorObj->translate('Erfolgsmeldung', Module::TEXT_DOMAIN);

        $srv = new ControllerAdminDeleteController($serviceObj);

        $srv->setSuccessRoute($successRoute);
        $srv->setSuccessMessage($successMessage);
        $srv->setField();

        return $srv;
    }
}