<?php

return array(
    'invokables' => array(
        'ModuleEntity-Jbig3Resource' => 'Jbig3Resource\Module\Model\Entity\ModuleEntity',
        'ControllerEntity-Jbig3Resource' => 'Jbig3Resource\Controller\Model\Entity\ControllerEntity',
    ),
    'factories' => array(

        'ModuleFieldset-Jbig3Resource'           => 'Jbig3Resource\Module\Model\Fieldset\ModuleFieldsetFactory',
        'ModuleHydrator-Jbig3Resource'           => 'Jbig3Resource\Module\Model\Hydrator\ModuleHydratorFactory',
        'ModuleMapper-Jbig3Resource'             => 'Jbig3Resource\Module\Model\Mapper\ModuleMapperFactory',
        'ModuleListener-Jbig3Resource'           => 'Jbig3Resource\Module\Model\Listener\ModuleListenerFactory',

        'ModuleAdminReadService-Jbig3Resource'   => 'Jbig3Resource\Module\UseCase\AdminRead\Service\ModuleAdminReadServiceFactory',
        'ModuleAdminCreateService-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminCreate\Service\ModuleAdminCreateServiceFactory',
        'ModuleAdminCreateForm-Jbig3Resource'    => 'Jbig3Resource\Module\UseCase\AdminCreate\Form\ModuleAdminCreateFormFactory',
        'ModuleAdminUpdateService-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminUpdate\Service\ModuleAdminUpdateServiceFactory',
        'ModuleAdminUpdateForm-Jbig3Resource'    => 'Jbig3Resource\Module\UseCase\AdminUpdate\Form\ModuleAdminUpdateFormFactory',
        'ModuleAdminDeleteService-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminDelete\Service\ModuleAdminDeleteServiceFactory',


        'ModuleNameObjectSelect-Jbig3Resource'       => 'Jbig3Resource\Controller\Model\Element\ModuleNameObjectSelectFactory',
        'ControllerFieldset-Jbig3Resource'           => 'Jbig3Resource\Controller\Model\Fieldset\ControllerFieldsetFactory',
        'ControllerHydrator-Jbig3Resource'           => 'Jbig3Resource\Controller\Model\Hydrator\ControllerHydratorFactory',
        'ControllerMapper-Jbig3Resource'             => 'Jbig3Resource\Controller\Model\Mapper\ControllerMapperFactory',
        'ControllerListener-Jbig3Resource'           => 'Jbig3Resource\Controller\Model\Listener\ControllerListenerFactory',

        'ControllerAdminReadService-Jbig3Resource'   => 'Jbig3Resource\Controller\UseCase\AdminRead\Service\ControllerAdminReadServiceFactory',
        'ControllerAdminCreateService-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminCreate\Service\ControllerAdminCreateServiceFactory',
        'ControllerAdminCreateForm-Jbig3Resource'    => 'Jbig3Resource\Controller\UseCase\AdminCreate\Form\ControllerAdminCreateFormFactory',
        'ControllerAdminUpdateService-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminUpdate\Service\ControllerAdminUpdateServiceFactory',
        'ControllerAdminUpdateForm-Jbig3Resource'    => 'Jbig3Resource\Controller\UseCase\AdminUpdate\Form\ControllerAdminUpdateFormFactory',
        'ControllerAdminDeleteService-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminDelete\Service\ControllerAdminDeleteServiceFactory',
    ),


);