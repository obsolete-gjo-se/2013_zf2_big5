<?php
namespace Jbig3Tryings\Form\Element\Hidden;

use Zend\Form\Element;

class Id extends Element
{

    public function __construct($name = 'id', $options = null)
    {
        parent::__construct($name, $options);

        $this->setAttributes(array(
            'type' => 'hidden',
        ));
    }

//    public function getInputSpecification()
//    {
//        return array(
//            'name' => $this->getName(),
//        );
//    }
}