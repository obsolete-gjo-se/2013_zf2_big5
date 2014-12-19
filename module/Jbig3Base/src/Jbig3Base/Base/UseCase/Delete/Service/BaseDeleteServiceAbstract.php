<?php
namespace Jbig3Base\Base\UseCase\Delete\Service;

use Zend\Form\Form;

use Jbig3Base\Base\UseCase\Base\Service\BaseServiceAbstract;

abstract class BaseDeleteServiceAbstract extends BaseServiceAbstract
{
    public function baseDelete()
    {
        if($this->getOwnerEntityObj()){

            $this->triggerEvent(parent::EVENT_PRE);

            $this->getMapperObj()->remove($this->getOwnerEntityObj());

            $this->triggerEvent(parent::EVENT_POST);

            return true;
        }
        return false;
    }


}