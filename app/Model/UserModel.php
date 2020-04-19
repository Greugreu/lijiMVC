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
    private $region;
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
    private $jobCoinjoin;
    private $lieuConjoin;
    private $password;
    private $token;
    private $role;
    private $createdAt;
    private $modifiedAt;


    public static function insertUser(string $nom, string $prenom, string $mail, string $password): void
    {
        $token = Tools::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() .
               " VALUES(NULL,?,?,NULL,NULL,NULL,NULL,NULL,NULL,?,NULL,NULL,NULL,NULL,NULL,NULL,NULL,?,?,1,NOW(),NULL)";
        App::getDatabase()->prepareInsert($sql, [$nom, $prenom, $mail, $password, $token]);
    }

    public static function findUserByMail(string $email)
    {
        $sql = "SELECT * FROM " . self::getTable() .
               " WHERE mail= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }

    public static function update($id, $nom, $prenom, $adresse, $region, $job, $lieuJob, $telJob, $telephone, $mail,
                                  $nomConjoin, $prenomConjoin, $adresseConjoin, $telephoneConjoin, $mobileConjoin,
                                  $jobConjoin, $lieuConjoin):
    void
    {
        $sql = "UPDATE " . self::getTable() . " SET nom = ?,prenom = ?,adresse = ?,region = ?,job = ?,lieuJob = ?,
        telJob = ?,telephone = ?,mail = ?,nomConjoin = ?,prenomConjoin = ?,adresseConjoin = ?,telephoneConjoin = ?,
        mobileConjoin = ?,jobConjoin = ?,lieuConjoin = ?,modifiedAt = NOW() WHERE idUsers = ?";
        App::getDatabase()->prepareInsert($sql,[$nom, $prenom, $adresse, $region, $job, $lieuJob, $telJob, $telephone, $mail,
            $nomConjoin, $prenomConjoin, $adresseConjoin, $telephoneConjoin, $mobileConjoin,
            $jobConjoin, $lieuConjoin, $id]);
    }



    public function findUsersById($id,$columId = 'idUsers')
    {
        return App::getDatabase()->prepare("SELECT * FROM " . self::getTable() . " WHERE ".$columId." = ?",[$id],get_called_class(),true);
    }

    /**
     * @return mixed
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * @param mixed $idUsers
     * @return UserModel
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;
        return $this;
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
     * @return UserModel
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
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
     * @return UserModel
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
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
     * @return UserModel
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return UserModel
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
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
     * @return UserModel
     */
    public function setJob($job)
    {
        $this->job = $job;
        return $this;
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
     * @return UserModel
     */
    public function setLieuJob($lieuJob)
    {
        $this->lieuJob = $lieuJob;
        return $this;
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
     * @return UserModel
     */
    public function setTelJob($telJob)
    {
        $this->telJob = $telJob;
        return $this;
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
     * @return UserModel
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
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
     * @return UserModel
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
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
     * @return UserModel
     */
    public function setNomConjoin($nomConjoin)
    {
        $this->nomConjoin = $nomConjoin;
        return $this;
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
     * @return UserModel
     */
    public function setPrenomConjoin($prenomConjoin)
    {
        $this->prenomConjoin = $prenomConjoin;
        return $this;
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
     * @return UserModel
     */
    public function setAdresseConjoin($adresseConjoin)
    {
        $this->adresseConjoin = $adresseConjoin;
        return $this;
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
     * @return UserModel
     */
    public function setTelephoneConjoin($telephoneConjoin)
    {
        $this->telephoneConjoin = $telephoneConjoin;
        return $this;
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
     * @return UserModel
     */
    public function setMobileConjoin($mobileConjoin)
    {
        $this->mobileConjoin = $mobileConjoin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobCoinjoin()
    {
        return $this->jobCoinjoin;
    }

    /**
     * @param mixed $jobCoinjoin
     * @return UserModel
     */
    public function setJobCoinjoin($jobCoinjoin)
    {
        $this->jobCoinjoin = $jobCoinjoin;
        return $this;
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
     * @return UserModel
     */
    public function setLieuConjoin($lieuConjoin)
    {
        $this->lieuConjoin = $lieuConjoin;
        return $this;
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
     * @return UserModel
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
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
     * @return UserModel
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
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
     * @return UserModel
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
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
     * @return UserModel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
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
     * @return UserModel
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }


}
