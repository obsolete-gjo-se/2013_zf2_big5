<?php
namespace Jbig3Resource\Controller\Model\Mapper;

use Jbig3Resource\Controller\Model\Factory\ControllerFactoryAbstract;

use Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Base\Base\Model\Mapper\BaseMapper;

class ControllerMapperFactory extends ControllerFactoryAbstract
{
	public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $mapperObj = new BaseMapper($this->getEmObj(), $this->getOwnerEntityObj()->getFqcn());

        return $mapperObj;

    }
}