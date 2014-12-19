<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Form;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydratorObj;

use Jbig3Resource\Controller\Model\Form\Fieldset\ControllerFieldset;
use Jbig3Resource\Module;

class ControllerAdminCreateFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {

        $mapperEntityFqcn = 'Jbig3Resource\Controller\Model\Entity\ControllerEntity';
        $inverseEntityFqcn = 'Jbig3Resource\Module\Model\Entity\ModuleEntity';
        $mapperEntityObj = $sm->get('ControllerEntity-Jbig3Resource');

        $em = $sm->get('jbig3-em');
        $doctrineHydratorObj = new DoctrineHydratorObj($em, $mapperEntityFqcn);

        $fieldsetNameStr = 'controllerAdminCreateFieldset';
        $translatorObj = $sm->get('translator');

        $fieldsetObj = new ControllerFieldset($doctrineHydratorObj, $mapperEntityObj, $fieldsetNameStr, $translatorObj, $em, $inverseEntityFqcn);

        $formNameStr = 'controllerAdminCreateForm';
        $valueName = $translatorObj->translate('Create', Module::TEXT_DOMAIN);
        $srv = new ControllerAdminCreateForm($formNameStr, $valueName, $doctrineHydratorObj, $fieldsetObj);

        return $srv;
    }
}