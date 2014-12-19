<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Controller;

use Jbig3Resource\Controller\UseCase\AdminUpdate\Factory\ControllerAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ControllerAdminUpdateControllerFactory extends ControllerAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ControllerAdminUpdateController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-controller-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('update ok', Module::TEXT_DOMAIN));

        return $controller;
    }
}