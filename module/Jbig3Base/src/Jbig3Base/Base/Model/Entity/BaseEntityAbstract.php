<?php

namespace Jbig3Base\Base\Model\Entity;

use Doctrine\ORM\Mapping as ORM;


abstract class BaseEntityAbstract implements BaseEntityInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    protected $fqcn;

    public function getId()
    {
        return $this->id;
    }

    public function getFqcn()
    {
        return $this->fqcn;
    }

    public function setFqcn($fqcn)
    {
        $this->fqcn = $fqcn;
    }
}