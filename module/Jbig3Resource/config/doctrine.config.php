<?php

return array(
    'driver' => array(
        'entityDriver-jbig3Resource' => array(
            'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
            'cache' => 'array',
            'paths' => array(
                __DIR__ . '/../src/Jbig3Resource/Module/Model',
                __DIR__ . '/../src/Jbig3Resource/Controller/Model',
            )
        ),

        'orm_default' => array(
            'drivers' => array(
                'Jbig3Resource\Module\Model' => 'entityDriver-jbig3Resource',
                'Jbig3Resource\Controller\Model' => 'entityDriver-jbig3Resource'
            )
        )
    )
);