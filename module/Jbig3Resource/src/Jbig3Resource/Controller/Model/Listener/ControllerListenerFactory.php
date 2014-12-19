<?php
namespace Jbig3Resource\Controller\Model\Listener;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerListenerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $listener = new ControllerListener();

        // Eventuelle externe Objekte einbinden (die die eigentliche Arbeit ausführen)

        return $listener;
    }
}