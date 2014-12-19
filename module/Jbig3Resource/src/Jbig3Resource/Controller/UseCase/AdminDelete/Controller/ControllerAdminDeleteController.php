<?php
namespace Jbig3Resource\Controller\UseCase\AdminDelete\Controller;

use Jbig3Base\Base\UseCase\Delete\Controller\BaseDeleteControllerAbstract;

class ControllerAdminDeleteController extends BaseDeleteControllerAbstract
{
    public function controllerAdminDeleteAction()
    {
        return $this->baseDelete();
    }
}
