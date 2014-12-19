<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Controller;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ControllerAdminUpdateControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        $translatorObj = $sm->get('translator');
        $serviceObj = $sm->get('ControllerAdminUpdateService-Jbig3Resource');

        $viewKey = 'controllerAdminUpdate';
        $successRoute = 'resource-controller-admin-read';
        $successMessage = $translatorObj->translate('Erfolgsmeldung', Module::TEXT_DOMAIN);

        $srv = new ControllerAdminUpdateController($serviceObj);

        $srv->setViewKey($viewKey);
        $srv->setSuccessRoute($successRoute);
        $srv->setSuccessMessage($successMessage);
        $srv->setField();

        return $srv;
    }
}