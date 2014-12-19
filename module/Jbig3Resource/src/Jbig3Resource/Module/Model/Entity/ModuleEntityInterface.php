<?php

namespace Jbig3Resource\Module\Model\Entity;

use Doctrine\Common\Collections\Collection;

interface ModuleEntityInterface
{
    public function getControllers();

    public function addControllers(Collection $controllers);

    public function removeControllers(Collection $controllers);

    public function getName();

    public function setName($name);

    public function getDescription();

    public function setDescription($description);

    public function getIsActive();

    public function setIsActive($isActive);
}