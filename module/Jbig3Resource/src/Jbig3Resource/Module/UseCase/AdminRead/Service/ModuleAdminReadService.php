<?php
namespace Jbig3Resource\Module\UseCase\AdminRead\Service;

use Zend\Form\Form;

use Jbig3Base\Base\UseCase\Read\Service\BaseReadServiceAbstract;

class ModuleAdminReadService extends BaseReadServiceAbstract
{
    public function moduleAdminRead()
    {
        return $this->baseRead();
    }
}