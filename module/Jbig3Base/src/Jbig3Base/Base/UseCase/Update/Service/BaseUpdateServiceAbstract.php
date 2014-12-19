<?php
namespace Jbig3Base\Base\UseCase\Update\Service;

use Jbig3Base\Base\UseCase\Write\Service\BaseWriteServiceAbstract;

abstract class BaseUpdateServiceAbstract extends BaseWriteServiceAbstract
{
    public function baseUpdate($postData)
    {
        return $this->baseWrite($postData);
    }
}