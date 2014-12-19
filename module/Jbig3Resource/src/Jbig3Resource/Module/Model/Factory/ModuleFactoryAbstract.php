<?php
namespace Jbig3Resource\Module\Model\Factory;

use Jbig3Base\Base\UseCase\Base\Factory\BaseUseCaseFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class ModuleFactoryAbstract extends BaseUseCaseFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    function getOwnerEntityObj()
    {
        if(!$this->ownerEntityObj){
            $this->setOwnerEntityObj($this->getSmObj()->get('ModuleEntity-Jbig3Resource'));
        }
        return $this->ownerEntityObj;
    }

    public function getFieldsetObj()
    {
        if(!$this->fieldsetObj){
            $this->setFieldsetObj($this->getSmObj()->get('ModuleFieldset-Jbig3Resource'));
        }
        return $this->fieldsetObj;
    }
    
    public function getHydratorObj()
    {
        if(!$this->hydratorObj){
            $this->setHydratorObj($this->getSmObj()->get('ModuleHydrator-Jbig3Resource'));
        }
        return $this->hydratorObj;
    }

    public function getMapperObj()
    {
        if(!$this->mapperObj){
            $this->setMapperObj($this->getSmObj()->get('ModuleMapper-Jbig3Resource'));
        }
        return $this->mapperObj;
    }

    public function getListenerObj()
    {
        if(!$this->listenerObj){
            $this->setListenerObj($this->getSmObj()->get('ModuleListener-Jbig3Resource'));
        }
        return $this->listenerObj;
    }
    
    
}