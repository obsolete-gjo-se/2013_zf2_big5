<?php
namespace Jbig3Resource\Module\UseCase\AdminRead\Controller;

use Jbig3Base\Base\UseCase\Read\Controller\BaseReadControllerAbstract;

class ModuleAdminReadController extends BaseReadControllerAbstract
{
    public function moduleAdminReadAction()
    {
        return $this->baseRead();
    }
}
