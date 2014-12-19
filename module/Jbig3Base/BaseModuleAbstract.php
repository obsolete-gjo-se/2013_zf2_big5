<?php
namespace Jbig3Base;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface,
    Zend\ModuleManager\Feature\InitProviderInterface,
    Zend\ModuleManager\Feature\ConfigProviderInterface,
    Zend\ModuleManager\Feature\ServiceProviderInterface,
    Zend\ModuleManager\Feature\ControllerProviderInterface,
    Zend\ModuleManager\Feature\ControllerPluginProviderInterface,
    Zend\ModuleManager\Feature\ViewHelperProviderInterface,
    Zend\ModuleManager\Feature\ValidatorProviderInterface,
    Zend\ModuleManager\Feature\FilterProviderInterface,
    Zend\ModuleManager\Feature\FormElementProviderInterface,
    Zend\ModuleManager\Feature\BootstrapListenerInterface;

abstract class BaseModuleAbstract implements
    AutoloaderProviderInterface,
    InitProviderInterface,
    ConfigProviderInterface,
    ServiceProviderInterface,
    ControllerProviderInterface,
    ControllerPluginProviderInterface,
    ViewHelperProviderInterface,
    ValidatorProviderInterface,
    FilterProviderInterface,
    FormElementProviderInterface,
    BootstrapListenerInterface
{
    protected $dir;

    public function getAutoloaderConfig()
    {
        $autoloaderConfig = $this->dir . '/config/autoloader.config.php';

        if (file_exists($autoloaderConfig)) {
            return include $autoloaderConfig;
        }
    }

    public function getConfig()
    {
        return array(
            'view_manager' => $this->getViewManagerConfig(),
            'router' => $this->getRouterConfig(),
            'doctrine' => $this->getDoctrineConfig(),
            'translator' => $this->getTranslatorConfig(),
        );
    }

    public function getViewManagerConfig()
    {
        $viewManagerConfig = $this->dir . '/config/viewManager.config.php';

        if (file_exists($viewManagerConfig)) {
            return include $viewManagerConfig;
        }
    }

    public function getRouterConfig()
    {
        $routerConfig = $this->dir . '/config/router.config.php';

        if (file_exists($routerConfig)) {
            return include $routerConfig;
        }
    }

    public function getDoctrineConfig()
    {
        $doctrineConfig = $this->dir . '/config/doctrine.config.php';

        if (file_exists($doctrineConfig)) {
            return include $doctrineConfig;
        }
    }

    public function getTranslatorConfig()
    {
        $translatorConfig = $this->dir . '/config/translator.config.php';

        if (file_exists($translatorConfig)) {
            return include $translatorConfig;
        }
    }

    public function getServiceConfig()
    {
        $serviceConfig = $this->dir . '/config/service.config.php';

        if (file_exists($serviceConfig)) {
            return include $serviceConfig;
        }
    }

    public function getControllerConfig()
    {
        $controllerConfig = $this->dir . '/config/controller.config.php';

        if (file_exists($controllerConfig)) {
            return include $controllerConfig;
        }
    }

    public function getControllerPluginConfig()
    {
        $controllerPluginConfig = $this->dir . '/config/controllerPlugin.config.php';

        if (file_exists($controllerPluginConfig)) {
            return include $controllerPluginConfig;
        }
    }

    public function getViewHelperConfig()
    {
        $viewHelperConfig = $this->dir . '/config/viewHelper.config.php';

        if (file_exists($viewHelperConfig)) {
            return include $viewHelperConfig;
        }
    }

    public function getValidatorConfig()
    {
        $validatorConfig = $this->dir . '/config/validator.config.php';

        if (file_exists($validatorConfig)) {
            return include $validatorConfig;
        }
    }

    public function getFilterConfig()
    {
        $filterConfig = $this->dir . '/config/filter.config.php';

        if (file_exists($filterConfig)) {
            return include $filterConfig;
        }
    }

    public function getFormElementConfig()
    {
        $formElementConfig = $this->dir . '/config/formElement.config.php';

        if (file_exists($formElementConfig)) {
            return include $formElementConfig;
        }
    }

    public function getRoutePluginConfig()
    {
        $routePluginConfig = $this->dir . '/config/routePlugin.config.php';

        if (file_exists($routePluginConfig)) {
            return include $routePluginConfig;
        }
    }

    public function getSerializerConfig()
    {
        $serializerConfig = $this->dir . '/config/serializer.config.php';

        if (file_exists($serializerConfig)) {
            return include $serializerConfig;
        }
    }

    public function getHydratorConfig()
    {
        $hydratorConfig = $this->dir . '/config/hydrator.config.php';

        if (file_exists($hydratorConfig)) {
            return include $hydratorConfig;
        }
    }

    public function getInputFilterConfig()
    {
        $inputFilterConfig = $this->dir . '/config/inputFilter.config.php';

        if (file_exists($inputFilterConfig)) {
            return include $inputFilterConfig;
        }
    }
}