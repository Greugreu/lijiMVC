<?php


namespace App\Controller;


use App\Repository\Controller;
use App\Service\Form;
use App\Service\Tools;
use App\Service\Validation;
use App\Model\UserModel;
use http\Client\Curl\User;
use App\Repository\View;

class UserController extends Controller
{
    public function isAdmin()
    {

    }

    public function account()
    {
        $message = 'Mon compte';
        $UM = new UserModel();
        $user = $UM->findUsersById($_SESSION['id']);

        $this->render('app.user.account', compact('message','user'));
    }

    public function infos()
    {
        $message = 'Informations personnelles';
        $idUser = $_SESSION['id'];
        $userModel = new \App\Model\UserModel();
        $user = $userModel->findUsersById($_SESSION['id']);
        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 50);
            $errors['nomC'] = $validation->textValid($post['nomConjoin'], 'nom', 2, 50);
            $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['prenomC'] = $validation->textValid($post['prenomConjoin'], 'prenomConjoin', 2, 50);
            $errors['tel'] = $validation->telValid($post['telephone'], 'telephone');
            $errors['telC'] = $validation->telValid($post['telephoneConjoin'], 'telephone');
            $errors['mail'] = $validation->emailValid($post['mail']);

            if (empty($post['adresseConjoin'])) {
                $post['adresseC'] = $post['adresse'];
            }
            if (empty($post['telephoneConjoinn'])) {
                $post['telephoneConjoinn'] = $post['telephone'];
            }
            var_dump($post);
            if ($validation->IsValid($errors) == true) {
                UserModel::update($post['nom'],$post['prenom'],$post['adresse'],
                    $post['region'], $post['job'], $post['lieuJob'], $post['telJob'], $post['telephone'], $post['mail'],
                    $post['nomConjoin'], $post['prenomConjoin'], $post['adresseConjoin'], $post['telephoneConjoin'], $post['mobileConjoin'],
                    $post['jobConjoin'], $post['lieuConjoin'], $idUser);
            }
        }

        $this->render('app.user.infos', compact('message', 'form', 'user'));
    }


}
