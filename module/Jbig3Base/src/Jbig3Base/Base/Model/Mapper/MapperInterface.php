<?php

namespace Jbig3Base\Base\Model\Mapper;

interface MapperInterface
{
    public function findOneBy($field, $email);
    public function persist($entity);
}
