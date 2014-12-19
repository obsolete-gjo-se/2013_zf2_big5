<?php
namespace Jbig3Base\Base\Model\Form\Element\Checkbox;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract,
    Jbig3Base\Module;
use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class IsActiveFactory extends BaseModelFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'isActive';

        $options = array(
            'label' => $this->getTranslatorObj()->translate('Ist Aktiv:', Module::TEXT_DOMAIN),
        );

        $element = new Checkbox($name, $options);

        return $element;
    }
}

