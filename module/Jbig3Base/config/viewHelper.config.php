<?php


return array(
    'invokables' => array(
        'dateHelper'    => 'Jbig3Base\Base\View\Helper\Date',
        'showForm'      => 'Jbig3Base\Base\View\Helper\ShowForm',
        'yesNo'         => 'Jbig3Base\Base\View\Helper\YesNo',
    ),
    'factories' => array(
        'showMessages'  => 'Jbig3Base\Base\View\Helper\ShowMessagesFactory',
    ),
);