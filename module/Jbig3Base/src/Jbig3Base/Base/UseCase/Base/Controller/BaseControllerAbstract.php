<?php
namespace Jbig3Base\Base\UseCase\Base\Controller;

use Zend\Mvc\Controller\AbstractActionController;

abstract class BaseControllerAbstract extends AbstractActionController
{
    protected $serviceObj;
    protected $redirectRoute;
    protected $prg;
    protected $viewKey;
    protected $successRoute;
    protected $successMessage;

    public function __construct($serviceObj = null)
    {
        $this->setServiceObj($serviceObj);
   }

    public function setServiceObj($serviceObj)
    {
        $this->serviceObj = $serviceObj;
        return $this;
    }

    public function getServiceObj()
    {
        return $this->serviceObj;
    }

    public function setRedirectRoute($redirectRoute)
    {
        $this->redirectRoute = $redirectRoute;
        return $this;
    }

    public function getRedirectRoute()
    {
        return $this->redirectRoute;
    }

    public function setPrg($prg)
    {
        $this->prg = $prg;
        return $this;
    }

    public function getPrg()
    {
        if(!$this->prg){
            $redirectRoute = $this->url()->fromRoute($this->getRedirectRoute(), array(), array(), true);
            $this->setPrg($this->prg($redirectRoute, true));
        }
        return $this->prg;
    }

    public function setViewKey($viewKey)
    {
        $this->viewKey = $viewKey;
        return $this;
    }

    public function getViewKey()
    {
        if(!$this->viewKey){
            $this->setViewKey($this->getServiceObj()->getEventAction());
        }
        return $this->viewKey;
    }

    public function setSuccessRoute($successRoute)
    {
        $this->successRoute = $successRoute;
        return $this;
    }

    public function getSuccessRoute()
    {
        return $this->redirect()->toUrl($this->url()->fromRoute($this->successRoute));
    }

    public function setSuccessMessage($successMessage)
    {
        $this->successMessage = $this->flashMessenger()->addMessage($successMessage);
        return $this;
    }

    public function getSuccessMessage()
    {
        return $this->successMessage;
    }
}