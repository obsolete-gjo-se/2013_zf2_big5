<?php
namespace Jbig3Resource\Controller\UseCase\AdminRead\Service;

use Zend\Form\Form;

use Jbig3Base\Base\UseCase\Read\Service\BaseReadServiceAbstract;

class ControllerAdminReadService extends BaseReadServiceAbstract
{
    public function controllerAdminRead()
    {
        return $this->baseRead();
    }
}