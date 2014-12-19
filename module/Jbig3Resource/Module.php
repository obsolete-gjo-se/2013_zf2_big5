<?php
namespace Jbig3Resource;

use Jbig3Base\BaseModuleAbstract;

use Zend\ModuleManager\ModuleManagerInterface as ModuleManagerInterfaceObj,
    Zend\EventManager\EventInterface as EventInterfaceObj;


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
    }
}