<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Controller;

use Jbig3Base\Base\UseCase\Create\Controller\BaseCreateControllerAbstract;

class ControllerAdminCreateController extends BaseCreateControllerAbstract
{
    public function controllerAdminCreateAction()
    {
        return $this->baseCreate();
    }
}
