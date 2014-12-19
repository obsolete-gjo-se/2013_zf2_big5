<?php
namespace Jbig3Base\Base\Model\Form\Element\Hidden;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract;
use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class IdFactory extends BaseModelFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'id';

        $element = new Hidden($name);

        return $element;
    }
}