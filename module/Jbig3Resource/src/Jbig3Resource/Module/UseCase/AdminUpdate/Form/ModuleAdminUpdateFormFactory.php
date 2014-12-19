<?php
namespace Jbig3Resource\Module\UseCase\AdminUpdate\Form;

use Jbig3Resource\Module\UseCase\AdminUpdate\Factory\ModuleAdminUpdateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Resource\Module;
use Jbig3Resource\Module\UseCase\AdminUpdate\Form\ModuleAdminUpdateForm;

class ModuleAdminUpdateFormFactory extends ModuleAdminUpdateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $form = new ModuleAdminUpdateForm($this->getFieldsetObj(), $this->getStandardElementsArr());

        $form
            ->get('submit')
            ->setValue($this->getTranslatorObj()->translate('Update-Überschrieben', Module::TEXT_DOMAIN));

        return $form;
    }
}