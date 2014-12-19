<?php
namespace Jbig3Resource\Module\Model\Listener;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ModuleListenerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $listener = new ModuleListener();

        // Eventuelle externe Objekte einbinden (die die eigentliche Arbeit ausführen)

        return $listener;
    }
}