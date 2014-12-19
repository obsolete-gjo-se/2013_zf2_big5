<?php
namespace Jbig3Resource\Module\UseCase\AdminDelete\Controller;

use Jbig3Base\Base\UseCase\Delete\Controller\BaseDeleteControllerAbstract;

class ModuleAdminDeleteController extends BaseDeleteControllerAbstract
{
    public function moduleAdminDeleteAction()
    {
        return $this->baseDelete();
    }
}
