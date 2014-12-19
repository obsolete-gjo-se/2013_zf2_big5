<?php

namespace Jbig3Resource\Module\UseCase\AdminCreate\Form;

use Jbig3Base\Base\Model\Form\BaseFormAbstract;

class ModuleAdminCreateForm extends BaseFormAbstract
{
    public function __construct($fieldsetObj, $standardElementsArr)
    {
        $this->setFormNameStr(basename(__CLASS__));

        parent::__construct($fieldsetObj, $standardElementsArr);
    }
}