<?php

namespace Jbig3Resource\Controller\UseCase\AdminCreate\Form;

use Jbig3Base\Base\Model\Form\BaseFormAbstract;

class ControllerAdminCreateForm extends BaseFormAbstract
{
    public function __construct($fieldsetObj, $standardElementsArr)
    {
        $this->setFormNameStr(basename(__CLASS__));

        parent::__construct($fieldsetObj, $standardElementsArr);
    }
}