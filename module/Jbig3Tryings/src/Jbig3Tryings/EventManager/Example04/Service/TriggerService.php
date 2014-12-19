<?php

namespace Jbig3Tryings\EventManager\Example04\Service;

use Zend\Debug\Debug;
use Jbig3Tryings\EventManager\Example04\EventManager\EventProvider;

class TriggerService extends EventProvider
{

    public function getGreeting()
    {
        $time = date('H');
        if (date("H") <= 12){
//            $this->getEventManager()->trigger('früh', __CLASS__);
            $this->getEventManager()->trigger(__FUNCTION__ . '.früh', __CLASS__, array('time' => $time));

            Debug::dump($time);
//            Debug::dump(__CLASS__);

        }else if (date("H") > 12 && date("H") < 17){
            $this->getEventManager()->trigger('mittag', __CLASS__);
        }else{
            $this->getEventManager()->trigger('spät', __CLASS__);
        }

        return $time;
    }
}