<?php


namespace App\Model;


use App\Repository\Database;
use App\Repository\Model;
use App\App;
use App\Service\Tools;


class KidsModel extends Model
{
    protected static $table = 'kids';
    private int $idkids;
    private $nom;
    private $prenom;
    private int $age;
    private $allergies;
    private $allergiesPlus;
    private $handicap;
    private $handicapPlus;
    private $directives;

/* SELECT *
FROM table1
LEFT JOIN table2 ON table1.id = table2.fk_id */

    public static function findKidsByUser($id)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE users_idUsers= ?";
        return App::getDatabase()->prepare($sql, [$id], get_called_class(),true);
    }

    /**
     * @return string
     */
    public static function getTable(): string
    {
        return self::$table;
    }

    /**
     * @param string $table
     */
    public static function setTable(string $table): void
    {
        self::$table = $table;
    }

    /**
     * @return int
     */
    public function getIdkids(): int
    {
        return $this->idkids;
    }

    /**
     * @param int $idkids
     */
    public function setIdkids(int $idkids): void
    {
        $this->idkids = $idkids;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * @param mixed $allergies
     */
    public function setAllergies($allergies): void
    {
        $this->allergies = $allergies;
    }

    /**
     * @return mixed
     */
    public function getAllergiesPlus()
    {
        return $this->allergiesPlus;
    }

    /**
     * @param mixed $allergiesPlus
     */
    public function setAllergiesPlus($allergiesPlus): void
    {
        $this->allergiesPlus = $allergiesPlus;
    }

    /**
     * @return mixed
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * @param mixed $handicap
     */
    public function setHandicap($handicap): void
    {
        $this->handicap = $handicap;
    }

    /**
     * @return mixed
     */
    public function getHandicapPlus()
    {
        return $this->handicapPlus;
    }

    /**
     * @param mixed $handicapPlus
     */
    public function setHandicapPlus($handicapPlus): void
    {
        $this->handicapPlus = $handicapPlus;
    }

    /**
     * @return mixed
     */
    public function getDirectives()
    {
        return $this->directives;
    }

    /**
     * @param mixed $directives
     */
    public function setDirectives($directives): void
    {
        $this->directives = $directives;
    }


}
