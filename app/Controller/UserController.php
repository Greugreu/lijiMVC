<?php


namespace App\Controller;


use App\Model\UserModel;
use App\Repository\Controller;

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


}