<?php
namespace Jbig3Resource\Module\Model\Fieldset;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ModuleFieldsetFactory extends ModuleFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $fieldsetObj = new ModuleFieldset(array(
            $this->getIdElementObj(),
            $this->getModuleNameElementObj(),
            $this->getModuleDescriptionElementObj(),
            $this->getIsActiveElementObj()
        ));

        $fieldsetObj
            ->setHydrator($this->getHydratorObj())
            ->setObject($this->getOwnerEntityObj());

        return $fieldsetObj;
    }
}