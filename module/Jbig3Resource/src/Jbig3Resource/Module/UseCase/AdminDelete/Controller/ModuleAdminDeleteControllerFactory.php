<?php
namespace Jbig3Resource\Module\UseCase\AdminDelete\Controller;

use Jbig3Resource\Module\UseCase\AdminDelete\Factory\ModuleAdminDeleteFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ModuleAdminDeleteControllerFactory extends ModuleAdminDeleteFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ModuleAdminDeleteController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-module-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('Erfolgreich delte'), Module::TEXT_DOMAIN);

        return $controller;
    }
}