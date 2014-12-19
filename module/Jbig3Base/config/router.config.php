<?php

return array(
    'routes' => array(
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/',
                'defaults' => array(
                    'controller' => 'BaseIndexController-Jbig3Base',
                    'action' => 'index',
                ),
            ),
        ),

        'phpInfo' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/phpinfo',
                'defaults' => array(
                    'controller' => 'BasePhpController-Jbig3Base',
                    'action' => 'php-info',
                ),
            ),
        ),
    )
);