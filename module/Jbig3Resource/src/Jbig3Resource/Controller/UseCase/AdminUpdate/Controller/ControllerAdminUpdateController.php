<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Controller;

use Jbig3Base\Base\UseCase\Update\Controller\BaseUpdateControllerAbstract;

class ControllerAdminUpdateController extends BaseUpdateControllerAbstract
{
    public function controllerAdminUpdateAction()
    {
        return $this->baseUpdate();
    }
}
