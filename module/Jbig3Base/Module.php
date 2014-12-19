<?php

namespace Jbig3Base;

include 'BaseModuleAbstract.php';

use Zend\ModuleManager\ModuleManagerInterface as ModuleManagerInterfaceObj,
    Zend\EventManager\EventInterface as EventInterfaceObj,
    Zend\Mvc\ModuleRouteListener;

class Module extends BaseModuleAbstract
{
    const TEXT_DOMAIN = __NAMESPACE__;

    public function __construct()
    {
        $this->dir = __DIR__;
    }

    public function init(ModuleManagerInterfaceObj $moduleManager)
    {
    }

    public function onBootstrap(EventInterfaceObj $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }
}
