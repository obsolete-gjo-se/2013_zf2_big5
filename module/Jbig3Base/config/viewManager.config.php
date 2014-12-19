<?php

return array(
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => array(
        'layout/layout' => __DIR__ . '/../view/jbig3base-layout/layout.phtml',
        'error/404' => __DIR__ . '/../view/jbig3base-error/404.phtml',
        'error/index' => __DIR__ . '/../view/jbig3base-error/index.phtml',
    ),
    'template_path_stack' => array(
        __DIR__ . '/../view',
    ),
);