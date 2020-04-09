<?php


namespace App\Controller;

use App\Model\ProModel;
use App\Repository\Controller;
use App\Repository\View;
use App\Service\Validation;
use App\Service\Tools;
use App\Service\Form;

class ProController extends Controller
{
    public function index()
    {
        $message = 'Espace Pro';

        $this->render('app.pro.proHome', compact('message'));
    }

    public function register()
    {
        $message = 'Inscription Pro';

        $message = 'Inscription';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['nomEntreprise'] = $validation->textValid($post['nomEntreprise'], 'nomEntreprise', 2, 50);
            $errors['adresse'] = $validation->textValid($post['adresse'], 'adresse', 2, 50);
            $errors['postal'] = $validation->textValid($post['postal'], 'postal', 2, 50);
            $errors['ville'] = $validation->textValid($post['ville'], 'ville', 2, 50);
            $errors['statut'] = $validation->textValid($post['statut'], 'statut', 2, 50);
            $errors['mail'] = $validation->emailValid($post['mail']);
            $errors['telephone'] = $validation->telValid($post['telephone'], 'nomEntreprise');
            $errors['password'] = $validation->textValid($post['password'], 'password', 2, 50);
            $errors['cfrm'] = $validation->generateErrorRepeat($post['password'], $post['cfrm'], 'Les mots de passe ne correspondent pas');



            if ($validation->IsValid($errors) == true) {
                $hash = password_hash($post['password'], PASSWORD_DEFAULT);
                ProModel::insertUser($post['nom'], $post['prenom'],$post['nomEntreprise'],$post['adresse'],$post['postal'],
                    $post['statut'], $post['mail'],$post['telephone'], $hash);
            }
        }

        $this->render('app.pro.proRegister', compact('message'));
    }
}
