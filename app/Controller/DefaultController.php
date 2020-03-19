<?php

namespace App\Controller;

use App\Repository\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Liji';

        $this->render('app.default.frontpage', array(
            'message' => $message,
        ));
    }

    public function mentionsLegales()
    {
        $message = 'Mentions Légales';

        $this->render('app.default.mentions',array(
            'message'   => $message,
        ));
    }

    public function cgu()
    {
        $message = 'Conditions Générales d\'Utilisation';

        $this->render('app.default.cgu',array(
            'message'   => $message,
        ));
    }

    public function logout()
    {
        $message = 'Déconnexion';

        $this->render('app.default.logout',array(
            'message'   => $message,
        ));
    }

    public function contact()
    {
        $message = 'Contactez nous';

        $this->render('app.default.contact',array(
            'message'   => $message,
        ));
    }

    public function login()
    {
        $message = 'Connexion';

        $this->render('app.default.login',array(
            'message'   => $message,
        ));
    }

    public function register()
    {
        $message = 'Inscription';

        $this->render('app.default.register',array(
            'message'   => $message,
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
