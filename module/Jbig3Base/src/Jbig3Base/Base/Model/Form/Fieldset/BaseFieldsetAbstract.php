<?php
namespace Jbig3Base\Base\Model\Form\Fieldset;

use Zend\Form\Fieldset,
    Zend\InputFilter\InputFilterProviderInterface;

abstract class BaseFieldsetAbstract
    extends Fieldset
    implements InputFilterProviderInterface
{

    protected $fieldsetNameStr;

    public function __construct($elementsObj)
    {
        parent::__construct($this->getFieldsetNameStr());

        $this->addElements($elementsObj);
    }

    public function setFieldsetNameStr($fieldsetNameStr)
    {
        $this->fieldsetNameStr = $fieldsetNameStr;
    }

    public function getFieldsetNameStr()
    {
        return $this->fieldsetNameStr;
    }

    public function addElements($elements)
    {
        foreach ($elements as $element) {
            $this->add($element);
        }
    }

    public function getInputFilterSpecification()
    {
        $inputFilter = array();

        foreach ($this->getElements() as $elementKey => $elementValue) {

            if (method_exists($elementValue, 'getFilters')) {
                if($elementValue->getFilters()){
                    $inputFilter[$elementKey]['filters'] = $elementValue->getFilters();
                }
            }

            if (method_exists($elementValue, 'getValidators')) {
                if($elementValue->getValidators()){
                    $inputFilter[$elementKey]['validators'] = $elementValue->getValidators();
                }
            }
        }

        return $inputFilter;
    }


}