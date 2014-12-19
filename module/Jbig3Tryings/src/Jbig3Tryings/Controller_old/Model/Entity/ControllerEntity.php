<?php

namespace Jbig3Resource\Controller\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

use Jbig3Base\Base\Model\Entity\BaseEntityAbstract,
    Jbig3Resource\Module\Model\Entity\ModuleEntity as ModuleEntityObj;

/**
 * @ORM\Entity
 * @ORM\Table(name="resource_controller")
 */
class ControllerEntity extends BaseEntityAbstract implements ControllerEntityInterface
{
    /**
     * @ORM\ManyToOne(targetEntity="Jbig3Resource\Module\Model\Entity\ModuleEntity", inversedBy="controllers")
     */
    protected $module;

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
        $this->setFqcn(__CLASS__);
    }

    public function getModule(){
        return $this->module;
    }

    public function setModule(ModuleEntityObj $module = null){
        $this->module = $module;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getIsActive(){
        return $this->isActive;
    }

    public function setIsActive($isActive){
        $this->isActive = $isActive;
    }
}