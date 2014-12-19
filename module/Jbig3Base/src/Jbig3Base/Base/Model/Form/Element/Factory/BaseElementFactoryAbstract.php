<?php
namespace Jbig3Base\Base\Model\Form\Element\Factory;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract;
use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class BaseElementFactoryAbstract extends BaseModelFactoryAbstract implements FactoryInterface
{

    protected $csrfElementObj;
    protected $submitElementObj;

    protected $isActiveElementObj;
    protected $idElementObj;
    protected $moduleDescriptionElementObj;
    protected $moduleNameElementObj;
    protected $controllerDescriptionElementObj;
    protected $controllerNameElementObj;

    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function setCsrfElementObj($csrfElementObj)
    {
        $this->csrfElementObj = $csrfElementObj;
    }

    public function getCsrfElementObj()
    {
        if(!$this->csrfElementObj){
            $this->setCsrfElementObj($this->getSmObj()->get('CsrfElement'));
        }
        return $this->csrfElementObj;
    }

    public function setSubmitElementObj($submitElementObj)
    {
        $this->submitElementObj = $submitElementObj;
    }

    public function getSubmitElementObj()
    {
        if(!$this->submitElementObj){
            $this->setSubmitElementObj($this->getSmObj()->get('SubmitElement'));
        }
        return $this->submitElementObj;
    }

    public function setIdElementObj($idElementObj)
    {
        $this->idElementObj = $idElementObj;
    }

    public function getIdElementObj()
    {
        if(!$this->idElementObj){
            $this->setIdElementObj($this->getSmObj()->get('IdElement'));
        }
        return $this->idElementObj;
    }

    public function setIsActiveElementObj($isActiveElementObj)
    {
        $this->isActiveElementObj = $isActiveElementObj;
    }

    public function getIsActiveElementObj()
    {
        if(!$this->isActiveElementObj){
            $this->setIsActiveElementObj($this->getSmObj()->get('IsActiveElement'));
        }
        return $this->isActiveElementObj;
    }

    public function setModuleDescriptionElementObj($moduleDescriptionElementObj)
    {
        $this->moduleDescriptionElementObj = $moduleDescriptionElementObj;
    }

    public function getModuleDescriptionElementObj()
    {
        if(!$this->moduleDescriptionElementObj){
            $this->setModuleDescriptionElementObj($this->getSmObj()->get('ModuleDescriptionElement'));
        }
        return $this->moduleDescriptionElementObj;
    }

    public function setModuleNameElementObj($moduleNameElementObj)
    {
        $this->moduleNameElementObj = $moduleNameElementObj;
    }

    public function getModuleNameElementObj()
    {
        if(!$this->moduleNameElementObj){
            $this->setModuleNameElementObj($this->getSmObj()->get('ModuleNameElement'));
        }
        return $this->moduleNameElementObj;
    }

    public function setControllerDescriptionElementObj($controllerDescriptionElementObj)
    {
        $this->controllerDescriptionElementObj = $controllerDescriptionElementObj;
    }

    public function getControllerDescriptionElementObj()
    {
        if(!$this->controllerDescriptionElementObj){
            $this->setControllerDescriptionElementObj($this->getSmObj()->get('ControllerDescriptionElement'));
        }
        return $this->controllerDescriptionElementObj;
    }

    public function setControllerNameElementObj($controllerNameElementObj)
    {
        $this->controllerNameElementObj = $controllerNameElementObj;
    }

    public function getControllerNameElementObj()
    {
        if(!$this->controllerNameElementObj){
            $this->setControllerNameElementObj($this->getSmObj()->get('ControllerNameElement'));
        }
        return $this->controllerNameElementObj;
    }

}