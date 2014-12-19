<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Controller;

use Jbig3Base\Base\UseCase\Read\Controller\BaseReadControllerAbstract;

class ControllerAdminReadController extends BaseReadControllerAbstract
{
    public function controllerAdminReadAction()
    {
        return $this->baseRead();
    }
}
