<?php
namespace Jbig3Base\Base\Model\Form;

use Zend\Form\Form;

class BaseFormAbstract extends Form
{

    protected $formNameStr;

    public function __construct($fieldsetObj, $standardElementsArr)
    {
        parent::__construct($this->getFormNameStr());

        $fieldsetObj->setUseAsBaseFieldset(true);
        $this->add($fieldsetObj);
        $this->addElements($standardElementsArr);
    }

    public function setFormNameStr($formNameStr)
    {
        $this->formNameStr = $formNameStr;
    }

    public function getFormNameStr()
    {
        return $this->formNameStr;
    }

    public function addElements($standardElementsArr)
    {
        foreach ($standardElementsArr as $elementObj) {
            $this->add($elementObj);
        }
    }

}