<?php
namespace Jbig3Base\Base\UseCase\Create\Controller;

use Jbig3Base\Base\UseCase\Write\Controller\BaseWriteControllerAbstract;

abstract class BaseCreateControllerAbstract extends BaseWriteControllerAbstract
{
    public function baseCreate()
    {
        return $this->baseWrite();
    }
}