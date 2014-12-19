<?php
namespace Jbig3Resource\Controller\UseCase\AdminCreate\Form;

use Jbig3Resource\Controller\UseCase\AdminCreate\Factory\ControllerAdminCreateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Resource\Module;

class ControllerAdminCreateFormFactory extends ControllerAdminCreateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $form = new ControllerAdminCreateForm($this->getFieldsetObj(), $this->getStandardElementsArr());

        $form
            ->get('submit')
            ->setValue($this->getTranslatorObj()->translate('Create-Überschrieben', Module::TEXT_DOMAIN));

        return $form;
    }
}