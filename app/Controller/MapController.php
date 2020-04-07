<?php


namespace App\Controller;


use App\Repository\Controller;
use App\Model\MapModel;

class MapController extends Controller
{
    public function index()
    {
        $MapModel = new MapModel();
        $content = $MapModel->findAllPros();
        json_encode($content);

        $this->render('app.default.map');
    }
}
