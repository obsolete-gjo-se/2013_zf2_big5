<?php
namespace Jbig3Resource;

return array(
    'Zend\Loader\StandardAutoloader' => array(
        'namespaces' => array(
            __NAMESPACE__ => realpath(__DIR__ . '/../src/' . __NAMESPACE__),
        ),
    ),
);

