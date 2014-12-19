<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Controller;

use Jbig3Base\Base\UseCase\Create\Controller\BaseCreateControllerAbstract;

class ModuleAdminCreateController extends BaseCreateControllerAbstract
{
    public function moduleAdminCreateAction()
    {
        return $this->baseCreate();
    }
}
