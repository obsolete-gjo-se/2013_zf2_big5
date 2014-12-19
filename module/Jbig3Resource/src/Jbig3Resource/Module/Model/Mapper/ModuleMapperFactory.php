<?php
namespace Jbig3Resource\Module\Model\Mapper;

use Jbig3Resource\Module\Model\Factory\ModuleFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Base\Base\Model\Mapper\BaseMapper;

class ModuleMapperFactory extends ModuleFactoryAbstract implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $mapperObj = new BaseMapper($this->getEmObj(), $this->getOwnerEntityObj()->getFqcn());

        return $mapperObj;

    }
}