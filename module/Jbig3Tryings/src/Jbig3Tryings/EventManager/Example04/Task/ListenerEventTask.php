<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gregory
 * Date: 19.06.13
 * Time: 13:05
 * To change this template use File | Settings | File Templates.
 */

namespace Jbig3Tryings\EventManager\Example04\Task;

use Zend\EventManager\EventInterface;

class ListenerEventTask
{
    public function frueh(EventInterface $e)
    {
        $param = $e->getParam('time');
        $ausgabestr = "Ist . $param . Uhr - also noch früh<br />";
        \Zend\Debug\Debug::dump($ausgabestr);
        return $ausgabestr;
    }

    public function mittag(EventInterface $e)
    {
        return "Ist Mittag<br />";
    }

    public function spaet(EventInterface $e)
    {
        return "Ist Spät<br />";
    }
}