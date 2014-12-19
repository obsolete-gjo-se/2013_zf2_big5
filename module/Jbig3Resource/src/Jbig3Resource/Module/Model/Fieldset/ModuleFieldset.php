<?php
namespace Jbig3Resource\Module\Model\Fieldset;

use Jbig3Base\Base\Model\Form\Fieldset\BaseFieldsetAbstract;

class ModuleFieldset extends BaseFieldsetAbstract
{
    public function __construct(array $elementsObj)
    {
        $this->setFieldsetNameStr(basename(__CLASS__));

        parent::__construct($elementsObj);
    }
}