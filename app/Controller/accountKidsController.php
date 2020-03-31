<?php


namespace App\Controller;

use App\Model\KidsModel;
use App\Repository\Controller;
use App\Service\Tools;

class accountKidsController extends UserController
{
    public function index()
    {
        $message = 'Mes enfants';

        $kids = KidsModel::findKidsByUser($_SESSION['id']);

        Tools::debug($kids);

        $this->render('app.user.accountKids', compact('message','kids'));
    }
}
