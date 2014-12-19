<?php

namespace Jbig3Base\Base\Model\Mapper;

use Doctrine\ORM\EntityManager;

class BaseMapper implements MapperInterface
{

    // weitere Methoden: http://www.zendexperts.com/tag/zf2/

    protected $em;
    protected $ownerEntityFqcn;

    public function __construct(EntityManager $em, $ownerEntityFqcn)
    {
        $this->setEm($em);
        $this->setOwnerEntityFqcn($ownerEntityFqcn);
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

    public function getEm()
    {
        return $this->em;
    }

    public function setOwnerEntityFqcn($ownerEntityFqcn)
    {
        $this->ownerEntityFqcn = $ownerEntityFqcn;
    }

    public function getOwnerEntityFqcn()
    {
        return $this->ownerEntityFqcn;
    }


    public function findAll()
    {
        $entity = $this->getEm()->getRepository($this->getOwnerEntityFqcn())->findAll();
        return $entity;
    }

    public function findOneBy($field, $value)
    {
        $entity = $this->getEm()->getRepository($this->getOwnerEntityFqcn())->findOneBy(array($field => $value));
        return $entity;
    }

    public function remove($entityObj)
    {
        $this->getEm()->remove($entityObj);
        $this->getEm()->flush();
    }


    public function persist($entity)
    {
        $this->getEm()->persist($entity);
        $this->getEm()->flush();

        return $entity;
    }
}