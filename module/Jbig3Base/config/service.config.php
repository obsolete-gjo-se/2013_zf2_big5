<?php

return array(
    'aliases' => array(
        'jbig3-em' => 'doctrine.entitymanager.orm_default',
    ),
    'invokables' => array(
        'bcrypt-jbig3base' => 'Zend\Crypt\Password\Bcrypt',
        'zendTemplatePathStack-jbig3base' => 'Zend\View\Resolver\TemplatePathStack',
        'zendViewModel-jbig3base' => 'Zend\View\Model\ViewModel',
        'zendPhpRenderer-jbig3base' => 'Zend\View\Renderer\PhpRenderer',
        'zendAggregateResolver-jbig3base' => 'Zend\View\Resolver\AggregateResolver',
    ),

    'factories' => array(
        // Checkbox:
        'IsActiveElement'           => 'Jbig3Base\Base\Model\Form\Element\Checkbox\IsActiveFactory',

        // Csrf:
        'CsrfElement'               => 'Jbig3Base\Base\Model\Form\Element\Csrf\CsrfFactory',

        // Hidden:
        'IdElement'                 => 'Jbig3Base\Base\Model\Form\Element\Hidden\IdFactory',

        // Submit:
        'SubmitElement'             => 'Jbig3Base\Base\Model\Form\Element\Submit\SubmitFactory',

        // Text:
        'ModuleNameElement'         => 'Jbig3Base\Base\Model\Form\Element\Text\ModuleNameFactory',
        'ModuleDescriptionElement'  => 'Jbig3Base\Base\Model\Form\Element\Text\ModuleDescriptionFactory',
        'ControllerNameElement'         => 'Jbig3Base\Base\Model\Form\Element\Text\ControllerNameFactory',
        'ControllerDescriptionElement'  => 'Jbig3Base\Base\Model\Form\Element\Text\ControllerDescriptionFactory',


        'templatePathStack-jbig3base' => 'Jbig3Base\View\TemplatePathStackFactory',
    ),
    'initializers' => array(),
    'abstract_factories' => array(
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        'Zend\Log\LoggerAbstractServiceFactory',
    ),
);