<?php
namespace Jbig3Base\Base\Model\Form\Element\Text;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract,
    Jbig3Base\Module;
use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerDescriptionFactory extends BaseModelFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'description';
        $options = array(
            'label' => $this->getTranslatorObj()->translate('ControllerBeschreibung:', Module::TEXT_DOMAIN)
        );
        $attributes = array(
            'required' => true
        );
        $filters = array(
            array(
                'name' => 'StringTrim'
            ),
        );
        $validators = array(
            array(
                'name' => 'StringLength',
                'options' => array(
                    'min' => 3,
                    'max' => 10,
                ),
            )
        );

        $element = new Text($name, $options);

        $element
            ->setAttributes($attributes)
            ->setFilters($filters)
            ->setValidators($validators);

        return $element;
    }
}

