<?php
namespace Jbig3Resource\Controller\Model\Hydrator;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

class ControllerHydratorFactory extends ControllerFactoryAbstract
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $doctrineHydratorObj = new DoctrineObject($this->getEmObj(), $this->getOwnerEntityObj()->getFqcn());

        return $doctrineHydratorObj;
    }
}