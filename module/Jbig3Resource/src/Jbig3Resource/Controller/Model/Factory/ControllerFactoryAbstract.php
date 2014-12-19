<?php
namespace Jbig3Resource\Controller\Model\Factory;

use Jbig3Base\Base\UseCase\Base\Factory\BaseUseCaseFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class ControllerFactoryAbstract extends BaseUseCaseFactoryAbstract implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function getOwnerEntityObj()
    {
        if(!$this->ownerEntityObj){
            $this->setOwnerEntityObj($this->getSmObj()->get('ControllerEntity-Jbig3Resource'));
        }
        return $this->ownerEntityObj;
    }

    public function getInverseEntityObj()
    {
        if(!$this->inverseEntityObj){
            $this->setInverseEntityObj($this->getSmObj()->get('ModuleEntity-Jbig3Resource'));
        }
        return $this->inverseEntityObj;
    }

    public function getObjectSelectElementObj()
    {
        if(!$this->objectSelectElementObj){
            $this->setObjectSelectElementObj($this->getSmObj()->get('ModuleNameObjectSelect-Jbig3Resource'));
        }
        return $this->objectSelectElementObj;
    }

    public function getFieldsetObj()
    {
        if(!$this->fieldsetObj){
            $this->setFieldsetObj($this->getSmObj()->get('ControllerFieldset-Jbig3Resource'));
        }
        return $this->fieldsetObj;
    }
    
    public function getHydratorObj()
    {
        if(!$this->hydratorObj){
            $this->setHydratorObj($this->getSmObj()->get('ControllerHydrator-Jbig3Resource'));
        }
        return $this->hydratorObj;
    }

    public function getMapperObj()
    {
        if(!$this->mapperObj){
            $this->setMapperObj($this->getSmObj()->get('ControllerMapper-Jbig3Resource'));
        }
        return $this->mapperObj;
    }

    public function getListenerObj()
    {
        if(!$this->listenerObj){
            $this->setListenerObj($this->getSmObj()->get('ControllerListener-Jbig3Resource'));
        }
        return $this->listenerObj;
    }
    
    
}