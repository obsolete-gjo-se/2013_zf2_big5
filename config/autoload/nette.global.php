<?php

return array(
    'nette_debug' => array(
        'enabled'      => true,
        'mode'         => null,        // true = production|false = development|null = autodetect|IP address(es) csv/array
        'bar'          => true,       // bool = enabled|Toggle nette diagnostics bar.
        'strict'       => true,        // bool = cause immediate death|int = matched against error severity
        'log'          => realpath(__DIR__ . "/../../data/logs"),          // bool = enabled|Path to directory eg. data/logs
        'email'        => "gregory@n-28.com",          // in production mode notifies the recipient
        'max_depth'    => 3,           // nested levels of array/object
        'max_len'      => 150,         // max string display length
    ),
);

