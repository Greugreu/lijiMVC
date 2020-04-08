<?php


namespace App\Controller;

use App\Repository\Controller;
use App\Repository\View;

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

        $this->render('app.pro.proRegister', compact('message'));
    }
}
