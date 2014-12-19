<?php

namespace Jbig3Resource\Module\Model\Entity;

use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection,
    Doctrine\Common\Collections\Collection;

use Jbig3Base\Base\Model\Entity\BaseEntityAbstract;

/**
 * @ORM\Entity
 * @ORM\Table(name="resource_module")
 */
class ModuleEntity extends BaseEntityAbstract implements ModuleEntityInterface
{
    /**
     * @ORM\OneToMany(targetEntity="Jbig3Resource\Controller\Model\Entity\ControllerEntity", mappedBy="module", cascade={"persist"})
     */
    protected $controllers;

    /**
     * @ORM\Column(type="string",length=50)
     */
    protected $name;

    /**
     * @ORM\Column(type="string",length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isActive;

    public function __construct()
    {
        $this->controllers = new ArrayCollection();
        $this->setFqcn(__CLASS__);
    }

    public function getControllers()
    {
        return $this->controllers;
    }

    public function addControllers(Collection $controllers)
    {
        foreach ($controllers as $controller) {
            $controller->setModule($this);
            $this->controllers->add($controller);
        }
    }

    public function removeControllers(Collection $controllers)
    {
        foreach ($controllers as $controller) {
            $controller->setModule(null);
            $this->controllers->removeElement($controller);
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}