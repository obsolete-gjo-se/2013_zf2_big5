<?php
namespace Jbig3Base\Base\Model\Factory;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class BaseModelFactoryAbstract implements FactoryInterface
{
    protected $smObj;
    protected $emObj;
    protected $translatorObj;
    protected $ownerEntityObj;
    protected $inverseEntityObj;
    protected $objectSelectElementObj;
    protected $fieldsetObj;
    protected $hydratorObj;
    protected $mapperObj;
    protected $listenerObj;

    public function createService(ServiceLocatorInterface $sm)
    {
        $this->setSmObj($sm);
    }

    public function setSmObj($smObj)
    {
        $this->smObj = $smObj;
    }

    public function getSmObj()
    {
        return $this->smObj;
    }

    public function setEmObj($emObj)
    {
        $this->emObj = $emObj;
    }

    public function getEmObj()
    {
        if(!$this->emObj){
            $this->setEmObj($this->getSmObj()->get('jbig3-em'));
        }
        return $this->emObj;
    }

    public function setTranslatorObj($translatorObj)
    {
        $this->translatorObj = $translatorObj;
    }

    public function getTranslatorObj()
    {
        if(!$this->translatorObj){
            $this->setTranslatorObj($this->getSmObj()->get('translator'));
        }
        return $this->translatorObj;
    }

    public function setOwnerEntityObj($ownerEntityObj)
    {
        $this->ownerEntityObj = $ownerEntityObj;
    }

    public function setInverseEntityObj($inverseEntityObj)
    {
        $this->inverseEntityObj = $inverseEntityObj;
    }

    public function setObjectSelectElementObj($objectSelectElementObj)
    {
        $this->objectSelectElementObj = $objectSelectElementObj;
    }

    public function setFieldsetObj($fieldsetObj)
    {
        $this->fieldsetObj = $fieldsetObj;
    }

    public function setHydratorObj($hydratorObj)
    {
        $this->hydratorObj = $hydratorObj;
    }

    public function setMapperObj($mapperObj)
    {
        $this->mapperObj = $mapperObj;
    }

    public function setListenerObj($listenerObj)
    {
        $this->listenerObj = $listenerObj;
    }


}