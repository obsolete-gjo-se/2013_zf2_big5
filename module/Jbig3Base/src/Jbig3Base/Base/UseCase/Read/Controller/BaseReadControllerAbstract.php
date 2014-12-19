<?php
namespace Jbig3Base\Base\UseCase\Read\Controller;

use Jbig3Base\Base\UseCase\Base\Controller\BaseControllerAbstract;

abstract class BaseReadControllerAbstract extends BaseControllerAbstract
{
    public function baseRead()
    {
        $this->getServiceObj()->setRouteParamsArr($this->params()->fromRoute());
        $eventAction = $this->getServiceObj()->getEventAction();



        return array(
            $this->getViewKey() => $this->getServiceObj()->$eventAction()
        );

    }
}