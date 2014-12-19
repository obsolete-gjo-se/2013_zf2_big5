<?php
namespace Jbig3Base\Base\UseCase\Update\Controller;

use Jbig3Base\Base\UseCase\Write\Controller\BaseWriteControllerAbstract;

abstract class BaseUpdateControllerAbstract extends BaseWriteControllerAbstract
{
    public function baseUpdate()
    {
        return $this->baseWrite();
    }
}