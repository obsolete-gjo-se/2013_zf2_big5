<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Controller;

use Jbig3Resource\Module\UseCase\AdminUpdate\Factory\ModuleAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ModuleAdminUpdateControllerFactory extends ModuleAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ModuleAdminUpdateController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-module-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('update ok', Module::TEXT_DOMAIN));

        return $controller;
    }
}