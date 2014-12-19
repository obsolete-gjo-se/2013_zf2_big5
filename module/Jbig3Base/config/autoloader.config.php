<?php
namespace Jbig3Base;

return array(
    'Zend\Loader\StandardAutoloader' => array(
        'namespaces' => array(
            __NAMESPACE__ => realpath(__DIR__ . '/../src/' . __NAMESPACE__),
        ),
    ),
);

