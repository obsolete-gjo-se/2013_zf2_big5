<?php
namespace Jbig3Resource\Controller\Model\Mapper;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Base\Base\Model\Mapper\BaseMapper;

class ControllerMapperFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $sm)
    {
        $em = $sm->get('jbig3-em');
        $mapperEntityFqcn = '\Jbig3Resource\Controller\Model\Entity\ControllerEntity';

        $srv = new BaseMapper($mapperEntityFqcn, $em);

        return $srv;
    }
}