<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Controller;

use Jbig3Resource\Controller\UseCase\AdminDelete\Factory\ControllerAdminDeleteFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ControllerAdminDeleteControllerFactory extends ControllerAdminDeleteFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ControllerAdminDeleteController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-controller-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('Erfolgreich delte'), Module::TEXT_DOMAIN);

        return $controller;
    }
}