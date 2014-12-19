<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Controller;

use Jbig3Resource\Module\UseCase\AdminCreate\Factory\ModuleAdminCreateFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ModuleAdminCreateControllerFactory extends ModuleAdminCreateFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ModuleAdminCreateController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-module-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('Erfolgsmeldung', Module::TEXT_DOMAIN));

        return $controller;
    }
}