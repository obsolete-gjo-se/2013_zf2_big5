<?php
namespace Jbig3Base\Base\UseCase\Base\Controller;

use Zend\View\Model\ViewModel;

class BasePhpInfoController extends BaseControllerAbstract
{
    public function phpInfoAction()
    {
        return new ViewModel(array(
                'phpinfo' => phpinfo()
            )
        );
    }
}