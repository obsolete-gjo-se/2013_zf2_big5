<?php

namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Form;

use Jbig3Base\Base\Model\Form\BaseFormAbstract;

class ControllerAdminUpdateForm extends BaseFormAbstract
{
    public function __construct($fieldsetObj, $standardElementsArr)
    {
        $this->setFormNameStr(basename(__CLASS__));

        parent::__construct($fieldsetObj, $standardElementsArr);
    }
}