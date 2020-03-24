<?php


namespace App\Model;


class ReservationModel
{
    protected static $table = 'reservation';
    private int $idplanning;
    private $debut;
    private $fin;
    private $nourriture;
    private $faim;
    private $prix;
    private $createdAt;
    private $modifiedAt;

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
    public function getIdplanning(): int
    {
        return $this->idplanning;
    }

    /**
     * @param int $idplanning
     */
    public function setIdplanning(int $idplanning): void
    {
        $this->idplanning = $idplanning;
    }

    /**
     * @return mixed
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param mixed $debut
     */
    public function setDebut($debut): void
    {
        $this->debut = $debut;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setFin($fin): void
    {
        $this->fin = $fin;
    }

    /**
     * @return mixed
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }

    /**
     * @param mixed $nourriture
     */
    public function setNourriture($nourriture): void
    {
        $this->nourriture = $nourriture;
    }

    /**
     * @return mixed
     */
    public function getFaim()
    {
        return $this->faim;
    }

    /**
     * @param mixed $faim
     */
    public function setFaim($faim): void
    {
        $this->faim = $faim;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param mixed $modifiedAt
     */
    public function setModifiedAt($modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }


}