<?php
namespace Jbig3Resource\Controller\Model\Fieldset;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControllerFieldsetFactory extends ControllerFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $fieldsetObj = new ControllerFieldset(array(
            $this->getIdElementObj(),
            $this->getObjectSelectElementObj(),
            $this->getControllerNameElementObj(),
            $this->getControllerDescriptionElementObj(),
            $this->getIsActiveElementObj()
        ));

        $fieldsetObj
            ->setHydrator($this->getHydratorObj())
            ->setObject($this->getOwnerEntityObj());

        return $fieldsetObj;
    }
}