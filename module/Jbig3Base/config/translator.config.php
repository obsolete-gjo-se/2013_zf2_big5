<?php

namespace Jbig3Base;

return array(
    'translation_file_patterns' => array(
        array(
            'type' => 'gettext',
            'base_dir' => realpath(__DIR__ . '/../language'),
            'pattern' => '%s.mo',
            'text_domain' => __NAMESPACE__
        ),
    ),
);