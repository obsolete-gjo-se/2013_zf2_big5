<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Controller;

use Jbig3Resource\Controller\UseCase\AdminCreate\Factory\ControllerAdminCreateFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;
use Jbig3Resource\Module;

class ControllerAdminCreateControllerFactory extends ControllerAdminCreateFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ControllerAdminCreateController($this->getServiceObj());

        $controller
            ->setSuccessRoute('resource-controller-admin-read')
            ->setSuccessMessage($this->getTranslatorObj()->translate('Erfolgsmeldung', Module::TEXT_DOMAIN));

        return $controller;
    }
}