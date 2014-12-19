<?php
namespace Jbig3Base\Base\UseCase\Base\Service;

use Zend\ServiceManager\ServiceManager,
    Zend\Form\Form;

use Jbig3Base\Base\Model\Mapper\MapperInterface;

abstract class BaseServiceAbstract extends EventServiceAbstract
{
    const FORM_IS_VALID = true;
    const FORM_IS_NOT_VALID = false;
    const EVENT_PRE = 'pre';
    const EVENT_POST = 'post';

    protected $routeParamsArr;
    protected $ownerEntityObj;
    protected $paramKey;
    protected $paramValue;
    protected $mapperObj;
    protected $formObj;
    protected $postData;
    protected $eventAction;
    protected $event;


    public function setRouteParamsArr($routeParamsArr)
    {
        $this->routeParamsArr = $routeParamsArr;
    }

    public function getRouteParamsArr()
    {
        return $this->routeParamsArr;
    }

    public function setOwnerEntityObj($ownerEntity, $paramKey = null)
    {
        $this->ownerEntityObj = $ownerEntity;
        $this->setParamKey($paramKey);
        return $this;
    }

    public function getOwnerEntityObj()
    {
        if ($this->getParamKey()) {
            if ($this->getParamValue()) {
                $this->setOwnerEntityObj($this->getMapperObj()->findOneBy($this->getParamKey(), $this->getParamValue()));
            };
        }
        return $this->ownerEntityObj;
    }

    public function setParamKey($paramKey)
    {
        $this->paramKey = $paramKey;
    }

    public function getParamKey()
    {
        return $this->paramKey;
    }

    public function setParamValue($paramValue)
    {
        $this->paramValue = $paramValue;
    }

    public function getParamValue()
    {
        $routeParamsArr = $this->getRouteParamsArr();

        if (!$this->paramValue) {
            if (array_key_exists($this->getParamKey(), $routeParamsArr)) {
                $this->setParamValue($routeParamsArr[$this->getParamKey()]);
            }
        }
        return $this->paramValue;
    }

    public function setMapperObj(MapperInterface $mapperObj)
    {
        $this->mapperObj = $mapperObj;
        return $this;
    }

    public function getMapperObj()
    {
        return $this->mapperObj;
    }

    public function setFormObj($formObj)
    {
        $this->formObj = $formObj;
        return $this;
    }

    public function getFormObj()
    {
        if($this->getOwnerEntityObj()){
            $this->formObj->bind($this->getOwnerEntityObj());
        }

        if($this->getPostData()){
            $this->formObj->setData($this->getPostData());
        }
        return $this->formObj;
    }

    public function setPostData($postData)
    {
        $this->postData = $postData;
    }

    public function getPostData()
    {
        return $this->postData;
    }

    public function attachListenerObj($listenerObj)
    {
        $this->getEventManager()
            ->attachAggregate($listenerObj);
        return $this;
    }

    public function setEventAction($eventAction)
    {
        $this->eventAction = $eventAction;
    }

    public function getEventAction()
    {
        if(!$this->eventAction){
            $this->setEventAction($this->getRouteParamsArr()['action']);
        }
        return $this->eventAction;
    }

    public function triggerEvent($prefix, $argv = array())
    {
        if(!$argv){
            $argv = array('ownerEntityObj', $this->getOwnerEntityObj());
        }

        $this->getEventManager()->trigger(
            $prefix . '.' . $this->getEventAction(), get_called_class(), $argv);
    }

    public function write()
    {
        $this->getMapperObj()->persist($this->getOwnerEntityObj());
    }

    public function read()
    {
        return $this->getMapperObj()->findAll();
    }
}