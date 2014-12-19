<?php

namespace Jbig3Resource\Module\UseCase\AdminUpdate\Form;

use Jbig3Base\Base\Model\Form\BaseFormAbstract;

class ModuleAdminUpdateForm extends BaseFormAbstract
{
    public function __construct($fieldsetObj, $standardElementsArr)
    {
        $this->setFormNameStr(basename(__CLASS__));

        parent::__construct($fieldsetObj, $standardElementsArr);
    }
}