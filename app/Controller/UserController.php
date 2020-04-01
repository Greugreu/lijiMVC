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

        $user = UserModel::findUsersById($_SESSION['id']);

        $this->render('app.user.account', compact('message','user'));
    }

    public function infos()
    {
        $message = 'Informations personnelles';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['tel'] = $validation->telValid($post['tel'], 'telephone');
            $errors['mail'] = $validation->emailValid($post['mail']);

            if ($validation->IsValid($errors) == true) {
                $hash = password_hash($post['password'], PASSWORD_DEFAULT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.user.infos', compact('message'));
    }


}
