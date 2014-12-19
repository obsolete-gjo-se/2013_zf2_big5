<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Form;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydratorObj;

use Jbig3Resource\Controller\Model\Form\Fieldset\ControllerFieldset;
use Jbig3Resource\Module;

class ControllerAdminUpdateFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {

        $mapperEntityFqcn = 'Jbig3Resource\Controller\Model\Entity\ControllerEntity';
        $inverseEntityFqcn = 'Jbig3Resource\Module\Model\Entity\ModuleEntity';
        $em = $sm->get('jbig3-em');
        $doctrineHydratorObj = new DoctrineHydratorObj($em, $mapperEntityFqcn);

        $mapperEntityObj = $sm->get('ControllerEntity-Jbig3Resource');
        // TODO: inkonsitenz der Namen mit Admin und ohne!!
        $formFieldsetNameStr = 'controllerAdminUpdateFieldset';
        $translatorObj = $sm->get('translator');
        $fieldsetObj = new ControllerFieldset($doctrineHydratorObj, $mapperEntityObj, $formFieldsetNameStr, $translatorObj, $em, $inverseEntityFqcn);


        $formNameStr = 'ControllerAdminUpdateForm';
        $valueName = $translatorObj->translate('Update', Module::TEXT_DOMAIN);
        $srv = new ControllerAdminUpdateForm($formNameStr, $valueName, $doctrineHydratorObj, $fieldsetObj);

        return $srv;
    }
}