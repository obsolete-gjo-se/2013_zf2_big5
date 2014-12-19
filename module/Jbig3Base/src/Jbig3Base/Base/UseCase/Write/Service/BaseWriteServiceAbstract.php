<?php
namespace Jbig3Base\Base\UseCase\Write\Service;

use Jbig3Base\Base\UseCase\Base\Service\BaseServiceAbstract;

abstract class BaseWriteServiceAbstract extends BaseServiceAbstract
{
    public function baseWrite($postData)
    {
        $this->setPostData($postData);

        if ($this->getFormObj()->isValid()) {

            $this->triggerEvent(parent::EVENT_PRE);

            $this->write();

            $this->triggerEvent(parent::EVENT_POST);

            return parent::FORM_IS_VALID;

        }

        return parent::FORM_IS_NOT_VALID;
    }
}