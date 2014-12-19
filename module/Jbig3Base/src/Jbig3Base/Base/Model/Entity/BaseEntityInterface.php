<?php

namespace Jbig3Base\Base\Model\Entity;

interface BaseEntityInterface
{
    public function getId();

    public function getFqcn();

    public function setFqcn($fqcn);
}