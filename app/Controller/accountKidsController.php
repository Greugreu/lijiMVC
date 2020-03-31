<?php


namespace App\Controller;

use App\Model\KidsModel;
use App\Repository\Controller;
use App\Service\Tools;
use App\Service\Validation;
use App\Service\Form;

class accountKidsController extends UserController
{
    public function index()
    {
        $message = 'Mes enfants';

        $kids = KidsModel::findKidsByUser($_SESSION['id']);

        Tools::debug($kids);

        $this->render('app.user.accountKids', compact('message','kids'));
    }

    public function registerKid()
    {
        $message = 'Inscrire un nouvel enfant';

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
                KidsModel::insertKids($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.user.registerKids', compact('message'));
    }
}
