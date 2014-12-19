<?php

namespace Jbig3Resource\Controller\Model\Entity;

use Jbig3Resource\Module\Model\Entity\ModuleEntity as ModuleEntityObj;

interface ControllerEntityInterface
{
    public function __construct();
    public function getModule();
    public function setModule(ModuleEntityObj $module = null);
    public function getName();
    public function setName($name);
    public function getDescription();
    public function setDescription($description);
    public function getIsActive();
    public function setIsActive($isActive);
}