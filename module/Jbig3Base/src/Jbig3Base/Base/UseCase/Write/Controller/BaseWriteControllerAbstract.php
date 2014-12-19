<?php
namespace Jbig3Base\Base\UseCase\Write\Controller;

use Jbig3Base\Base\UseCase\Base\Controller\BaseControllerAbstract;

use Zend\Stdlib\ResponseInterface as Response;

abstract class BaseWriteControllerAbstract extends BaseControllerAbstract
{
    public function baseWrite()
    {
        $this->getServiceObj()->setRouteParamsArr($this->params()->fromRoute());
        $eventAction = $this->getServiceObj()->getEventAction();

        if($this->getPrg() === false){
            return array(
                $this->getViewKey() => $this->getServiceObj()->getFormObj()
            );
        }elseif($this->getPrg() instanceof Response){
            return $this->getPrg();
        }elseif(!$this->getServiceObj()->$eventAction($this->getPrg())){
            return array(
                $this->getViewKey() => $this->getServiceObj()->getFormObj()
            );
        }

        $this->getSuccessMessage();
        return $this->getSuccessRoute();
    }
}