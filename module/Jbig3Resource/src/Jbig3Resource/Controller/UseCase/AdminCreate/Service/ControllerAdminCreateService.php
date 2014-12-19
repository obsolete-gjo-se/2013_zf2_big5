<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Service;

use Jbig3Base\Base\UseCase\Create\Service\BaseCreateServiceAbstract;

class ControllerAdminCreateService extends BaseCreateServiceAbstract
{
    public function controllerAdminCreate($postData)
    {
        return $this->baseCreate($postData);
    }
}
