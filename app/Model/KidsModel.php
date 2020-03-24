<?php


namespace App\Model;


class KidsModel
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