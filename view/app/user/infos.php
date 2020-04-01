<?php

$userModel = new \App\Model\UserModel();
$user = $userModel->findUsersById($_SESSION['id']);

$v = new \App\Service\Tools();
$v->debug($user);
?>

<h1><?= $message ?></h1>

<form action="" method="post">
    <div class="accNom">
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom" value="<?= $user->nom; ?>">
    </div>
    <div class="accPrenom">
        <label for="prenom">Votre Prenom</label>
        <input type="text" name="prenom" id="prenom" value="<?= $user->prenom; ?>">
    </div>
    <div class="accAdresse">
        <label for="adresse">Votre adresse</label>
        <input type="text" name="adresse" id="adresse" value="<?= $user->adresse; ?>">
    </div>
    <div class="accRegion">
        <label for="region">Region</label>
        <input type="text" name="region" id="region" value="<?= $user->region; ?>">
    </div>
    <div class="accJob">
        <label for="job">Votre profession</label>
        <input type="text" name="job" id="job" value="<?= $user->job; ?>">
    </div>
    <div class="accLieuJob">
        <label for="lieuJob">L'adresse de votre lieu de travail</label>
        <input type="text" name="lieuJob" id="lieuJob" value="<?= $user->lieuJob; ?>">
    </div>
    <div class="accTelJob">
        <label for="telJob">Votre numéro de téléphon professionnel</label>
        <input type="number" name="telJob" id="telJob" value="<?= $user->telJob; ?>">
    </div>
    <div class="accTel">
        <label for="tel">Votre numéro de téléphone personnel</label>
        <input type="number" name="tel" id="tel" value="<?= $user->telephone; ?>">
    </div>
    <div class="accMail">
        <label for="mail">Votre adresse email</label>
        <input type="text" name="mail" id="mail" value="<?= $user->mail; ?>">
    </div>
    <div class="accNomConjoin">
        <label for="nomC">Nom du conjoin</label>
        <input type="text" name="nomC" id="nomC" value="<?= $user->nomConjoin; ?>">
    </div>
    <div class="accPrenomConjoin">
        <label for="prenomC">Prénom du conjoin</label>
        <input type="text" name="prenomC" id="prenomC" value="<?= $user->prenomConjoin; ?>">
    </div>
    <div class="accAdresseConjoin">
        <label for="adresseC">Adresse du conjoin (laisser vide si la même)</label>
        <input type="text" name="adresseC" id="adresseC" value="<?= $user->adresseConjoin; ?>">
    </div>
    <div class="accTelConjoin">
        <label for="telC">Numéro de téléphone personnel du conjoin (laisser vide si le même)</label>
        <input type="number" name="telC" id="telC" value="<?= $user->telephoneConjoin; ?>">
    </div>
    <div class="accMobileConjoin">
        <label for="mobileC">Numéro mobile du conjoin</label>
        <input type="number" name="mobileC" id="mobileC" value="<?= $user->mobileConjoin; ?>">
    </div>
    <div class="accJobConjoin">
        <label for="jobC">Profession du conjoin</label>
        <input type="text" name="jobC" id="jobC" value="<?= $user->jobConjoin; ?>">
    </div>
    <div class="accLieuJobConjoin">
        <label for="lieuJobC">Adresse du lieu de travail du conjoin</label>
        <input type="text" name="lieuJobC" id="lieuJobC" value="<?= $user->lieuConjoin; ?>">
    </div>
    <input type="submit" name="submitted" value="Envoyer">
</form>



<?php
