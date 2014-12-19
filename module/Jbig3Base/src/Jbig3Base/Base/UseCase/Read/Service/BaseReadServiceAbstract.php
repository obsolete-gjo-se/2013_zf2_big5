<?php
namespace Jbig3Base\Base\UseCase\Read\Service;

use Zend\Form\Form;

use Jbig3Base\Base\UseCase\Base\Service\BaseServiceAbstract;

abstract class BaseReadServiceAbstract extends BaseServiceAbstract
{
    public function baseRead()
    {
        $this->triggerEvent(parent::EVENT_PRE);

        $entityObj = $this->read();

        $this->triggerEvent(parent::EVENT_POST);

        return $entityObj;
    }
}