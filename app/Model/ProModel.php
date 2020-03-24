<?php


namespace App\Model;


class ProModel
{
    protected static $table = 'pro';
    private int $idPro;
    private $nom;
    private $prenom;
    private $nomEntreprise;
    private $adresse;
    private $statut;
    private $mail;
    private int $telephone;
    private int $siret;
    private float $tarif;
    private float $note;
    private $token;
    private $createdAt;
    private $modifiedAt;
    private int $places;

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
    public function getIdPro(): int
    {
        return $this->idPro;
    }

    /**
     * @param int $idPro
     */
    public function setIdPro(int $idPro): void
    {
        $this->idPro = $idPro;
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
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * @param mixed $nomEntreprise
     */
    public function setNomEntreprise($nomEntreprise): void
    {
        $this->nomEntreprise = $nomEntreprise;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return int
     */
    public function getTelephone(): int
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int
     */
    public function getSiret(): int
    {
        return $this->siret;
    }

    /**
     * @param int $siret
     */
    public function setSiret(int $siret): void
    {
        $this->siret = $siret;
    }

    /**
     * @return float
     */
    public function getTarif(): float
    {
        return $this->tarif;
    }

    /**
     * @param float $tarif
     */
    public function setTarif(float $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return float
     */
    public function getNote(): float
    {
        return $this->note;
    }

    /**
     * @param float $note
     */
    public function setNote(float $note): void
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
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

    /**
     * @return int
     */
    public function getPlaces(): int
    {
        return $this->places;
    }

    /**
     * @param int $places
     */
    public function setPlaces(int $places): void
    {
        $this->places = $places;
    }


}