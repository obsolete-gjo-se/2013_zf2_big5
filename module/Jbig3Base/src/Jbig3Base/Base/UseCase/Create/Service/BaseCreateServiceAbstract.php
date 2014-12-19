<?php
namespace Jbig3Base\Base\UseCase\Create\Service;

use Jbig3Base\Base\UseCase\Write\Service\BaseWriteServiceAbstract;

abstract class BaseCreateServiceAbstract extends BaseWriteServiceAbstract
{
    public function baseCreate($postData)
    {
        return $this->baseWrite($postData);
    }
}