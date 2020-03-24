<?php

namespace App\Controller;

use App\Repository\Controller;
use App\Service\Form;
use App\Service\Validation;
use App\Model\UserModel;

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

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 50);
            $errors['nom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['mail'] = $validation->emailValid($post['mail']);
            $errors['password'] = $validation->textValid($post['password'], 'password', 2, 50);
            $errors['cfrm'] = $validation->generateErrorRepeat($post['password'], $post['cfrm'], 'Les mots de passe ne correspondent pas');
            $errors['cgu'] = $validation->generateErrorCheckBox($post['cgu'], 'Veuillez accepter les conditions d\'utilisation.');
            $this->debug($errors);
            if ($validation->IsValid($errors) == true) {
                $hash = password_hash($post['password'], PASSWORD_DEFAULT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.default.register', compact('message', 'form', 'errors')
        );
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
