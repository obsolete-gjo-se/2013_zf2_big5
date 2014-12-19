<?php
namespace Jbig3Base\Base\UseCase\Delete\Controller;

use Jbig3Base\Base\UseCase\Base\Controller\BaseControllerAbstract;

abstract class BaseDeleteControllerAbstract extends BaseControllerAbstract
{
    public function baseDelete()
    {
        $this->getServiceObj()->setRouteParamsArr($this->params()->fromRoute());
        $eventAction = $this->getServiceObj()->getEventAction();

        if ($this->serviceObj->$eventAction()) {
            $this->getSuccessMessage();
            return $this->redirect()->toUrl($this->url()->fromRoute($this->getSuccessRoute()));
        }
    }
}