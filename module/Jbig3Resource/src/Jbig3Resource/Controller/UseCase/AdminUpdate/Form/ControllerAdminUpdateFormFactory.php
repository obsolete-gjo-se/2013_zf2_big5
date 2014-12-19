<?php
namespace Jbig3Resource\Controller\UseCase\AdminUpdate\Form;

use Jbig3Resource\Controller\UseCase\AdminUpdate\Factory\ControllerAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Resource\Module;

class ControllerAdminUpdateFormFactory extends ControllerAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $form = new ControllerAdminUpdateForm($this->getFieldsetObj(), $this->getStandardElementsArr());

        $form
            ->get('submit')
            ->setValue($this->getTranslatorObj()->translate('Update-Überschrieben', Module::TEXT_DOMAIN));

        return $form;
    }
}