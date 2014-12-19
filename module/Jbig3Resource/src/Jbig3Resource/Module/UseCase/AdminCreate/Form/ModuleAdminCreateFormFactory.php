<?php
namespace Jbig3Resource\Module\UseCase\AdminCreate\Form;

use Jbig3Resource\Module\UseCase\AdminCreate\Factory\ModuleAdminCreateFactoryAbstract;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

use Jbig3Resource\Module;
use Jbig3Resource\Module\UseCase\AdminCreate\Form\ModuleAdminCreateForm;

class ModuleAdminCreateFormFactory extends ModuleAdminCreateFactoryAbstract implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        parent::createService($sm);

        $form = new ModuleAdminCreateForm($this->getFieldsetObj(), $this->getStandardElementsArr());

        $form
            ->get('submit')
            ->setValue($this->getTranslatorObj()->translate('Create-Überschrieben', Module::TEXT_DOMAIN));

        return $form;
    }
}