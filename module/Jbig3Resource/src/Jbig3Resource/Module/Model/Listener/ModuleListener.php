<?php
namespace Jbig3Resource\Module\Model\Listener;

use Zend\EventManager\EventInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

class ModuleListener implements ListenerAggregateInterface
{
    const PRE_MODULE_ADMIN_CREATE_ACTION = 'pre.moduleAdminCreateAction';
    protected $listeners = array();

    public function attach(EventManagerInterface $events)
    {
        // dient derzeit nur als Beispiel zur Beeinflussung von Objekten vor dem speichern
        $this->listeners[] = $events->attach(
            self::PRE_MODULE_ADMIN_CREATE_ACTION, array($this, 'create'), 100
        );
    }

    public function detach(EventManagerInterface $events)
    {
        foreach ($this->listeners as $index => $listener) {
            if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        }
    }

    // dient nur zu Demozwecken
    public function create(EventInterface $e)
    {
        // wenn gebraucht, sollte die Methode auf jeden in eigene Klasse verschoben werden
        $param = $e->getParam('ownerEntityObj');
        $params = $e->getParams();

        // ist so ausgebuffter Blödsninn, aber funktioniert
//        $params[1]->setName('einer nuer name');

    }

}
