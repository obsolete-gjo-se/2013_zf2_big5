<?php

return array(
    'routes' => array(
        'resource-module-admin-create' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/admin/module/create',
                'defaults' => array(
                    'controller' => 'ModuleAdminCreateController-Jbig3Resource',
                    'action' => 'moduleAdminCreate',
                )
            )
        ),

        'resource-module-admin-read' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/admin/module',
                'defaults' => array(
                    'controller' => 'ModuleAdminReadController-Jbig3Resource',
                    'action' => 'moduleAdminRead',
                )
            )
        ),

        'resource-module-admin-update' => array(
            'type' => 'Zend\Mvc\Router\Http\Segment',
            'options' => array(
                'route' => '/admin/module/update/:id',
                'defaults' => array(
                    'controller' => 'ModuleAdminUpdateController-Jbig3Resource',
                    'action' => 'moduleAdminUpdate',
                    'id' => ''
                )
            )
        ),

        'resource-module-admin-delete' => array(
            'type' => 'Zend\Mvc\Router\Http\Segment',
            'options' => array(
                'route' => '/admin/module/delete/:id',
                'defaults' => array(
                    'controller' => 'ModuleAdminDeleteController-Jbig3Resource',
                    'action' => 'moduleAdminDelete',
                    'id' => ''
                )
            )
        ),

        'resource-controller-admin-create' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/admin/controller/create',
                'defaults' => array(
                    'controller' => 'ControllerAdminCreateController-Jbig3Resource',
                    'action' => 'controllerAdminCreate',
                )
            )
        ),

        'resource-controller-admin-read' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/admin/controller',
                'defaults' => array(
                    'controller' => 'ControllerAdminReadController-Jbig3Resource',
                    'action' => 'controllerAdminRead',
                )
            )
        ),

        'resource-controller-admin-update' => array(
            'type' => 'Zend\Mvc\Router\Http\Segment',
            'options' => array(
                'route' => '/admin/controller/update/:id',
                'defaults' => array(
                    'controller' => 'ControllerAdminUpdateController-Jbig3Resource',
                    'action' => 'controllerAdminUpdate',
                    'id' => ''
                )
            )
        ),

        'resource-controller-admin-delete' => array(
            'type' => 'Zend\Mvc\Router\Http\Segment',
            'options' => array(
                'route' => '/admin/controller/delete/:id',
                'defaults' => array(
                    'controller' => 'ControllerAdminDeleteController-Jbig3Resource',
                    'action' => 'controllerAdminDelete',
                    'id' => ''
                )
            )
        ),
    )
);