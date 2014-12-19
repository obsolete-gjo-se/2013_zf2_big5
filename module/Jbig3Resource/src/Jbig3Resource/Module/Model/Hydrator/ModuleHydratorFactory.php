<?php
namespace Jbig3Resource\Module\Model\Hydrator;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;
use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

class ModuleHydratorFactory extends ModuleFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $doctrineHydratorObj = new DoctrineObject($this->getEmObj(), $this->getOwnerEntityObj()->getFqcn());

        return $doctrineHydratorObj;
    }
}