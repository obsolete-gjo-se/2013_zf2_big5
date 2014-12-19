<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Service;

use Jbig3Base\Base\UseCase\Update\Service\BaseUpdateServiceAbstract;

class ControllerAdminUpdateService extends BaseUpdateServiceAbstract
{
    public function controllerAdminUpdate($postData)
    {
        return $this->baseUpdate($postData);
    }
}
