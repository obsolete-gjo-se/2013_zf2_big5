<?php
namespace Jbig3Resource\Controller\Model\Form\Fieldset;

use Jbig3Resource\Base\Model\Form\Fieldset\BaseFieldsetAbstract,
    DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydratorObj,
    Zend\MVC\I18n\Translator as TranslatorObj,
    Doctrine\Common\Persistence\ObjectManager;

class ControllerFieldset // extends BaseFieldsetAbstract
{

    public function __construct(
            DoctrineHydratorObj $doctrineHydratorObj,
            $controllerEntityObj,
            $fieldsetNameStr,
            TranslatorObj $translator,
            ObjectManager $objectManager,
            $inverseEntityFqcn)
    {
        parent::__construct($fieldsetNameStr, $translator);

        $this->setHydrator($doctrineHydratorObj);
        $this->setObject($controllerEntityObj);

        $this->createIdField();
        $this->createNameField();
        $this->createDescriptionField();
        $this->createIsActiveField();

        $this->add(
            array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'module',
                'options' => array(
                    'object_manager' => $objectManager,
                    'target_class' => $inverseEntityFqcn,
                    'property' => 'name',
                ),
            )
        );
    }
}