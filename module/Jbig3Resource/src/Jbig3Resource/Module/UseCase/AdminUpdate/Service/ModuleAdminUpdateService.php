<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Service;

use Jbig3Base\Base\UseCase\Update\Service\BaseUpdateServiceAbstract;

class ModuleAdminUpdateService extends BaseUpdateServiceAbstract
{
    public function moduleAdminUpdate($postData)
    {
        return $this->baseUpdate($postData);
    }
}
