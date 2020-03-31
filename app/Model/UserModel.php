<?php

namespace App\Model;

use App\Repository\Database;
use App\Repository\Model;
use App\App;
use App\Service\Tools;

class UserModel extends Model
{
    protected static $table = 't_users';
    private $idUsers;
    private $nom;
    private $prenom;
    private $adresse;
    private $job;
    private $lieuJob;
    private $telJob;
    private $telephone;
    private $mail;
    private $nomConjoin;
    private $prenomConjoin;
    private $adresseConjoin;
    private $telephoneConjoin;
    private $mobileConjoin;
    private $jonCoinjoin;
    private $lieuConjoin;
    private $password;
    private $token;
    private $role;
    private $createdAt;
    private $modifiedAt;


    public static function insertUser(string $nom, string $prenom, string $mail, string $password): void
    {
        $token = Tools::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() . " VALUES(NULL,?,?,NULL,NULL,NULL,NULL,NULL,NULL,?,NULL,NULL,NULL,NULL,NULL,NULL,NULL,?,?,1,NOW(),NULL)";
        App::getDatabase()->prepareInsert($sql, [$nom, $prenom, $mail, $password, $token]);
    }

    public static function findUserByMail(string $email): object
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE mail= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }

    public static function update($id,$post): void
    {
        $sql = "UPDATE ". self::getTable() ." SET email = ?,nom = ?,fruit_id = ?, modified_at = NOW() WHERE id = ?";
        App::getDatabase()->prepareInsert($sql,[$post['name'],$post['firstname'],$post['mail'],
            $post['password'], $post['created_at'], $post['modified_at'], $post['roles'], $post['token']]);
    }

    public static function findUsersById($id,$columId = 'idUsers')
    {
        return App::getDatabase()->prepare("SELECT * FROM " . self::getTable() . " WHERE ".$columId." = ?",[$id],get_called_class(),true);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->idUsers;
    }

    /**
     * @param mixed $idUsers
     */
    public function setId($idUsers): void
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
     * @return mixed
     */
    public function getTelJob()
    {
        return $this->telJob;
    }

    /**
     * @param mixed $telJob
     */
    public function setTelJob($telJob): void
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

    public function getEmail()
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
     * @return mixed
     */
    public function getTelephoneConjoin()
    {
        return $this->telephoneConjoin;
    }

    /**
     * @param mixed $telephoneConjoin
     */
    public function setTelephoneConjoin($telephoneConjoin): void
    {
        $this->telephoneConjoin = $telephoneConjoin;
    }

    /**
     * @return mixed
     */
    public function getMobileConjoin()
    {
        return $this->mobileConjoin;
    }

    /**
     * @param mixed $mobileConjoin
     */
    public function setMobileConjoin($mobileConjoin): void
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
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
