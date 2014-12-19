<?php

namespace Jbig3User\Backend\Controller\Insert;

use Zend\Stdlib\ResponseInterface as Response;

use Zend\Debug\Debug;

use Jbig3User\General\Controller\UserController,
    Jbig3User\Module;

class InsertController extends UserController
{
    const ROUTE_INSERT = 'admin-user-insert';
    const ROUTE_SUCCESS_INSERT = 'admin-user';
    const VIEW_VARIABLE = 'insertForm';

    protected $userObjViewVar = 'userObj';

    public function insertAction()
    {

        // 1. eigene Route
        $redirectUrl = $this->url()->fromRoute(static::ROUTE_INSERT);

        // 2. getPrg() (kann zusammengefasst werden)
        // setPrg(Route) in Factory
        $prg = $this->prg($redirectUrl, true);

        // getPrg() kann sein
            //a: Request (Postdaten) => speichert Daten in Seesion
            // b: Response (per GET umgeleitet) => liest aus Session aus
            // c: false
        // if getPrg() eine Antwort ist

        // wenn eine Anwort gib die Anwtort aus (Array aus Session) nach Umleitung
        if ($prg instanceof Response) {
            return $prg;
        } elseif ($prg === false) {
            // es ist keine Anwort (Standardfall bei erstaufruf) => Form wird ausgegeben
            return $this->getViewModel(self::VIEW_VARIABLE, $this->serviceObj->getFormObj());
        }

        // nach Umleitung werden Daten aus Session an Service übergeben
        $post = $prg;
        $user = $this->serviceObj->insert($post);

        if (!$user) {
            // Form ist nicht valide und wird wieder ausgegeben
            return $this->getViewModel(self::VIEW_VARIABLE, $this->serviceObj->getFormObj());
        }

        $this->flashMessenger()->addMessage(
            $this->translatorObj->translate(
                'SuccessInsertUser', Module::USER_TEXT_DOMAIN));

        return $this->redirect()->toUrl($this->url()->fromRoute(static::ROUTE_SUCCESS_INSERT));
    }

    public function getViewModel($ViewVariable, $content)
    {
        return array(
            $ViewVariable => $content
        );
    }


}