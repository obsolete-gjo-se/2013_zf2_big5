<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Service;

use Jbig3Base\Base\UseCase\Create\Service\BaseCreateServiceAbstract;

class ModuleAdminCreateService extends BaseCreateServiceAbstract
{
    public function moduleAdminCreate($postData)
    {
        return $this->baseCreate($postData);
    }
}
