<?php
namespace Jbig3Resource\Module\UseCase\AdminDelete\Service;

use Zend\Form\Form;

use Jbig3Base\Base\UseCase\Delete\Service\BaseDeleteServiceAbstract;

class ModuleAdminDeleteService extends BaseDeleteServiceAbstract
{
    public function moduleAdminDelete()
    {
        return $this->baseDelete();
    }
}