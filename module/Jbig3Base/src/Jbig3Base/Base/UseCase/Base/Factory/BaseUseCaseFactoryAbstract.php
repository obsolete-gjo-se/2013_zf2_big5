<?php
namespace Jbig3Base\Base\UseCase\Base\Factory;

use Jbig3Base\Base\Model\Form\Element\Factory\BaseElementFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

abstract class BaseUseCaseFactoryAbstract extends BaseElementFactoryAbstract implements FactoryInterface
{
    protected $serviceObj;
    protected $formObj;
    protected $standardElementsArr = array();

    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);
    }

    public function setServiceObj($serviceObj)
    {
        $this->serviceObj = $serviceObj;
    }

    public function setFormObj($formObj)
    {
        $this->formObj = $formObj;
    }

    public function setStandardElementsArr($standardElementsArr)
    {
        $this->standardElementsArr = $standardElementsArr;
    }

    public function getStandardElementsArr()
    {
        if(!$this->standardElementsArr){

            $standardElementsArr = array(
                $this->getSubmitElementObj(),
                $this->getCsrfElementObj()
            );

            $this->setStandardElementsArr($standardElementsArr);
        }
        return $this->standardElementsArr;
    }
}