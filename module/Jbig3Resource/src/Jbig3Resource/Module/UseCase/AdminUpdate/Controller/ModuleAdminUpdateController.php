<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Controller;

use Jbig3Base\Base\UseCase\Update\Controller\BaseUpdateControllerAbstract;

class ModuleAdminUpdateController extends BaseUpdateControllerAbstract
{
    public function moduleAdminUpdateAction()
    {
        return $this->baseUpdate();
    }
}
