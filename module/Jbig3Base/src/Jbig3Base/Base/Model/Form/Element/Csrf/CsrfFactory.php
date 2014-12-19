<?php
namespace Jbig3Base\Base\Model\Form\Element\Csrf;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class CsrfFactory extends BaseModelFactoryAbstract
    implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'csrf';

        $options = array(
            'csrf_options' => array(
                'timeout' => 600
            )
        );

        $element = new Csrf($name, $options);

        return $element;
    }
}