<?php

namespace App\Model;

use App\Repository\Database;
use App\Repository\Model;
use App\App;
use App\Service\Tools;

class UserModel extends Model
{
    protected static $table = 't_users';
    private int $idUsers;
    private $nom;
    private $prenom;
    private $adresse;
    private $job;
    private $lieuJob;
    private int $telJob;
    private $telephone;
    private $mail;
    private $nomConjoin;
    private $prenomConjoin;
    private $adresseConjoin;
    private int $telephoneConjoin;
    private int $mobileConjoin;
    private $jonCoinjoin;
    private $lieuConjoin;
    private $token;
    private $createdAt;
    private $modifiedAt;


    public static function insertUser(string $name, string $firstname, string $mail, string $password): void
    {
        $token = UserModel::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() . " VALUES()";
        App::getDatabase()->prepareInsert($sql, []);
    }

    public static function userLogin(string $email)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE email= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }

    public static function update($id,$post): void
    {
        $sql = "UPDATE ". self::getTable() ." SET email = ?,nom = ?,fruit_id = ?, modified_at = NOW() WHERE id = ?";
        App::getDatabase()->prepareInsert($sql,[$post['name'],$post['firstname'],$post['mail'],
            $post['password'], $post['created_at'], $post['modified_at'], $post['roles'], $post['token']]);
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
    public function getIdUsers(): int
    {
        return $this->idUsers;
    }

    /**
     * @param int $idUsers
     */
    public function setIdUsers(int $idUsers): void
    {
        $this->idUsers = $idUsers;
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
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job): void
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getLieuJob()
    {
        return $this->lieuJob;
    }

    /**
     * @param mixed $lieuJob
     */
    public function setLieuJob($lieuJob): void
    {
        $this->lieuJob = $lieuJob;
    }

    /**
     * @return int
     */
    public function getTelJob(): int
    {
        return $this->telJob;
    }

    /**
     * @param int $telJob
     */
    public function setTelJob(int $telJob): void
    {
        $this->telJob = $telJob;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
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
     * @return mixed
     */
    public function getNomConjoin()
    {
        return $this->nomConjoin;
    }

    /**
     * @param mixed $nomConjoin
     */
    public function setNomConjoin($nomConjoin): void
    {
        $this->nomConjoin = $nomConjoin;
    }

    /**
     * @return mixed
     */
    public function getPrenomConjoin()
    {
        return $this->prenomConjoin;
    }

    /**
     * @param mixed $prenomConjoin
     */
    public function setPrenomConjoin($prenomConjoin): void
    {
        $this->prenomConjoin = $prenomConjoin;
    }

    /**
     * @return mixed
     */
    public function getAdresseConjoin()
    {
        return $this->adresseConjoin;
    }

    /**
     * @param mixed $adresseConjoin
     */
    public function setAdresseConjoin($adresseConjoin): void
    {
        $this->adresseConjoin = $adresseConjoin;
    }

    /**
     * @return int
     */
    public function getTelephoneConjoin(): int
    {
        return $this->telephoneConjoin;
    }

    /**
     * @param int $telephoneConjoin
     */
    public function setTelephoneConjoin(int $telephoneConjoin): void
    {
        $this->telephoneConjoin = $telephoneConjoin;
    }

    /**
     * @return int
     */
    public function getMobileConjoin(): int
    {
        return $this->mobileConjoin;
    }

    /**
     * @param int $mobileConjoin
     */
    public function setMobileConjoin(int $mobileConjoin): void
    {
        $this->mobileConjoin = $mobileConjoin;
    }

    /**
     * @return mixed
     */
    public function getJonCoinjoin()
    {
        return $this->jonCoinjoin;
    }

    /**
     * @param mixed $jonCoinjoin
     */
    public function setJonCoinjoin($jonCoinjoin): void
    {
        $this->jonCoinjoin = $jonCoinjoin;
    }

    /**
     * @return mixed
     */
    public function getLieuConjoin()
    {
        return $this->lieuConjoin;
    }

    /**
     * @param mixed $lieuConjoin
     */
    public function setLieuConjoin($lieuConjoin): void
    {
        $this->lieuConjoin = $lieuConjoin;
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

}
