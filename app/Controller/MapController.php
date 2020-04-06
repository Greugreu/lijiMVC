<?php


namespace App\Controller;


use App\Repository\Controller;

class MapController extends Controller
{
    public function index()
    {
        $this->render('app.default.map');
    }
}
