<?php
namespace Jbig3Resource\Module\UseCase\AdminRead\Controller;

use Jbig3Resource\Module\UseCase\AdminRead\Factory\ModuleAdminReadFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleAdminReadControllerFactory extends ModuleAdminReadFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $sm = $sl->getServiceLocator();

        parent::createService($sm);

        $controller = new ModuleAdminReadController($this->getServiceObj());

        return $controller;
    }
}