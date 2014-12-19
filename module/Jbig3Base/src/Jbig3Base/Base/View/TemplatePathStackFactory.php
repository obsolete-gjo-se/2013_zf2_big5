<?php
namespace Jbig3Base\Base\View;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class TemplatePathStackFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $sm)
    {
        $zendTemplatePathStackObj = $sm->get('zendTemplatePathStack-jbig3base');
        $zendAggregateResolverObj = $sm->get('zendAggregateResolver-jbig3base');
        $zendPhpRendererObj = $sm->get('zendPhpRenderer-jbig3base');

        $srv =  new TemplatePathStack($zendTemplatePathStackObj, $zendAggregateResolverObj, $zendPhpRendererObj);

        return $srv;
    }


}