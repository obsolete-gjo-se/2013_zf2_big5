<?php
namespace Jbig3Base\Base\UseCase\Base\Controller;

use Zend\View\Model\ViewModel;

class BaseIndexController extends BaseControllerAbstract
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
