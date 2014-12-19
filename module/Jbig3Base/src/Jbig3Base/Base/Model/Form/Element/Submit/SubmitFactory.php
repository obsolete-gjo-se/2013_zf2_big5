<?php
namespace Jbig3Base\Base\Model\Form\Element\Submit;

use Jbig3Base\Base\Model\Factory\BaseModelFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class SubmitFactory extends BaseModelFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $name = 'submit';

        $element = new Submit($name);

        return $element;
    }
}