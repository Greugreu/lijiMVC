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

        $kids = KidsModel::findAllKidsByUser($_SESSION['id']);

        $userModel = new \App\Model\UserModel();
        $user = $userModel->findUsersById($_SESSION['id']);

        Tools::debug($kids);

        $this->render('app.user.accountKids', compact('message','kids', 'user'));
    }

    public function registerKid()
    {
        $message = 'Inscrire un nouvel enfant';

        $errors = array();
        $form = new Form($errors, 'post');
        $idUser = $_SESSION['id'];
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);

            if ($post['allergies+'] == '') {
                $post['allergies'] = 0;
            }
            if ($post['pathologie+'] == '') {
                $post['pathologie'] = 0;
            }

            if ($validation->IsValid($errors) == true) {
                KidsModel::insertKids($post['nom'], $post['prenom'], $post['dateNaissance'], $post['allergies'],
                    $post['allergies+'],
                    $post['pathologie'], $post['pathologie+'], $post['directives'], $idUser);
            }
        }

        $this->render('app.user.registerKids', compact('message', 'form', 'errors'));
    }
}
