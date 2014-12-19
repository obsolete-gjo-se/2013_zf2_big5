<?php
namespace Jbig3Resource\Controller\Model\Element;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Base\Module,
    Jbig3Base\Base\Model\Form\Element\ObjectSelect\ObjectSelect;

class ModuleNameObjectSelectFactory extends ControllerFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'module';

        $options = array(
            'object_manager' => $this->getEmObj(),
            'target_class' => $this->getInverseEntityObj()->getFqcn(),
            'property' => 'name',
            'label' => $this->getTranslatorObj()->translate('ModuleName:', Module::TEXT_DOMAIN)
        );

        $element = new ObjectSelect($name, $options);

        return $element;
    }
}

