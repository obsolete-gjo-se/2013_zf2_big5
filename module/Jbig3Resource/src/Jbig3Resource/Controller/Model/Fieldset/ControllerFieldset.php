<?php
namespace Jbig3Resource\Controller\Model\Fieldset;

use Jbig3Base\Base\Model\Form\Fieldset\BaseFieldsetAbstract;

class ControllerFieldset extends BaseFieldsetAbstract
{
    public function __construct(array $elementsObj)
    {
        $this->setFieldsetNameStr(basename(__CLASS__));

        parent::__construct($elementsObj);
    }
}