<?php


namespace App\Model;

use App\Repository\Model;
use App\App;

class MapModel extends Model
{
    public function findAllPros()
    {
        $sql = "SELECT idpro, nomEntreprise, adresse, mail, telephone, note, places
                FROM pro";
        return App::getDatabase()->prepare($sql, get_called_class(),false);
    }
}
