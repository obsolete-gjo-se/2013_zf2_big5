<?php

namespace Jbig3Resource\Controller\Model\Entity;

use Jbig3Resource\Module\Model\Entity\ModuleEntity;

interface ControllerEntityInterface
{
    public function setModule(ModuleEntity $module = null);

    public function getModule();

    public function setName($name);

    public function getName();

    public function setDescription($description);

    public function getDescription();

    public function setIsActive($isActive);

    public function getIsActive();

}