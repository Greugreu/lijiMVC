<?php

namespace App\Controller;

use App\Repository\Controller;
use App\Service\Form;
use App\Service\Tools;
use App\Service\Validation;
use App\Model\UserModel;
use http\Client\Curl\User;
use App\Repository\View;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = '';
        if (!empty($_SESSION)) {
            $message = 'Bonjour ' . $_SESSION['prenom'];
        } else {
            $message = 'Liji';
        }

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
        if (empty($_SESSION)) {
            session_start();
        }
        $_SESSION = array();

        session_destroy();

        $this->render('app.default.logout');
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

        $errors = array();
        $form = new Form();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['mail'] = $validation->emailValid($post['mail']);

            if ($validation->IsValid($errors) == true) {
                $user = UserModel::findUserByMail($post['mail']);
                if ($user->mail === $post['mail'] && password_verify($post['password'], $user->password)) {
                    $_SESSION = array(
                        'id' => $user->idUsers,
                        'nom' => $user->nom,
                        'prenom' => $user->prenom,
                        'role' => $user->role,
                        'email' => $user->mail,
                        'ip' => $_SERVER['REMOTE_ADDR'],
                    );
                    header('Location: home');
                } else {
                    $errors['password'] = 'Mail ou mot de passe incorrect';
                }
            } else {
                $errors['login'] = 'Erreur dans les identifiants';
            }
        }

        $this->render('app.default.login', compact('message', 'form', 'errors'));
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
            $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['mail'] = $validation->emailValid($post['mail']);
            $errors['password'] = $validation->textValid($post['password'], 'password', 2, 50);
            $errors['cfrm'] = $validation->generateErrorRepeat($post['password'], $post['cfrm'], 'Les mots de passe ne correspondent pas');
            $errors['cgu'] = $validation->generateErrorCheckBox($post['cgu'], 'Veuillez accepter les conditions d\'utilisation.');

            if ($validation->IsValid($errors) == true) {
                $hash = password_hash($post['password'], PASSWORD_DEFAULT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.default.register', compact('message', 'form', 'errors')
        );
    }

    public function forgot()
    {
        $message = 'Mot de passe oublié';
        $view = new View();
        $html = '';
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $check = UserModel::findUserByMail($post['mail']);
            Tools::debug($check);
            $token = $check->token;
            if (!empty($check->mail && $check->token)) {
                $html = '<a href="'.$view->path('changePassword',array($token)).'">Changer de Mot de Passe</a>';
            } else {
                $html = 'Email Inconnu';
            }
        }

        $this->render('app.default.forgot', compact('message', 'html'));
    }

    public function changePassword()
    {
        $message = 'C\'est le changement de mot de passe';

        $this->render('app.default.changePassword', compact('message'));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
