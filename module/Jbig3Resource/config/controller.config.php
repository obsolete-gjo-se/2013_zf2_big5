<?php

return array(
    'factories' => array(
        'ModuleAdminReadController-Jbig3Resource'   => 'Jbig3Resource\Module\UseCase\AdminRead\Controller\ModuleAdminReadControllerFactory',
        'ModuleAdminCreateController-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminCreate\Controller\ModuleAdminCreateControllerFactory',
        'ModuleAdminUpdateController-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminUpdate\Controller\ModuleAdminUpdateControllerFactory',
        'ModuleAdminDeleteController-Jbig3Resource' => 'Jbig3Resource\Module\UseCase\AdminDelete\Controller\ModuleAdminDeleteControllerFactory',

        'ControllerAdminReadController-Jbig3Resource'   => 'Jbig3Resource\Controller\UseCase\AdminRead\Controller\ControllerAdminReadControllerFactory',
        'ControllerAdminCreateController-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminCreate\Controller\ControllerAdminCreateControllerFactory',
        'ControllerAdminUpdateController-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminUpdate\Controller\ControllerAdminUpdateControllerFactory',
        'ControllerAdminDeleteController-Jbig3Resource' => 'Jbig3Resource\Controller\UseCase\AdminDelete\Controller\ControllerAdminDeleteControllerFactory',

    ),
);