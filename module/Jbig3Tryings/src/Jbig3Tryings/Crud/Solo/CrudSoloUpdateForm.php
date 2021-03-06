<?php
namespace Jbig3Tryings\Crud\Solo;

use Zend\Form\Form;
use Doctrine\Common\Persistence\ObjectManager;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

use Jbig3Tryings\Crud\Solo\CrudSoloFieldset;

class CrudSoloUpdateForm extends Form
{
    protected $entityFqcn = 'Jbig3Tryings\Crud\Solo\CrudSoloEntity';

    public function __construct(ObjectManager $objectManager)
    {
        parent::__construct('solo');

        $this->setAttribute('action', '');
        $this->setAttribute('method', 'post');

        $this->setHydrator(new DoctrineHydrator($objectManager, $this->entityFqcn));

        $fieldset = new CrudSoloFieldset($objectManager);
        $fieldset->setUseAsBaseFieldset(true);
        $this->add($fieldset);

//        $this->add(array(
//            'type' => 'Jbig3Tryings\Crud\Form\Fieldset\TestSoloFieldset',
//            'options' => array(
//                'use_as_base_fieldset' => true
//            )
//        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'update'
            ),
        ));
    }
}