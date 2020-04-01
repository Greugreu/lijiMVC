<h1><?= $message ?></h1>

<form action="" method="post">
    <div class="accNom">
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div class="accPrenom">
        <label for="prenom">Votre Prenom</label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <div class="accAdresse">
        <label for="adresse">Votre adresse</label>
        <input type="text" name="adresse" id="adresse">
    </div>
    <div class="accRegion">
        <label for="region">Region</label>
        <input type="text" name="region" id="region">
    </div>
    <div class="accJob">
        <label for="job">Votre profession</label>
        <input type="text" name="job" id="job">
    </div>
    <div class="accLieuJob">
        <label for="lieuJob">L'adresse de votre lieu de travail</label>
        <input type="text" name="lieuJob" id="lieuJob">
    </div>
    <div class="accTelJob">
        <label for="telJob">Votre numéro de téléphon professionnel</label>
        <input type="text" name="telJob" id="telJob">
    </div>
    <div class="accTel">
        <label for="tel">Votre numéro de téléphone personnel</label>
        <input type="text" name="tel" id="tel">
    </div>
    <div class="accMail">
        <label for="mail">Votre adresse email</label>
        <input type="text" name="mail" id="mail">
    </div>
    <div class="accNomConjoin">
        <label for="nomC">Nom du conjoin</label>
        <input type="text" name="nomC" id="nomC">
    </div>
    <div class="accPrenomConjoin">
        <label for="prenomC">Prénom du conjoin</label>
        <input type="text" name="prenomC" id="prenomC">
    </div>
    <div class="accAdresseConjoin">
        <label for="adresseC">Adresse du conjoin (laisser vide si la même)</label>
        <input type="text" name="adresseC" id="adresseC">
    </div>
    <div class="accTelConjoin">
        <label for="telC">Numéro de téléphone personnel du conjoin (laisser vide si le même)</label>
        <input type="text" name="telC" id="telC">
    </div>
    <div class="accMobileConjoin">
        <label for="mobileC">Numéro mobile du conjoin</label>
        <input type="text" name="mobileC" id="mobileC">
    </div>
    <div class="accJobConjoin">
        <label for="jobC">Profession du conjoin</label>
        <input type="text" name="jobC" id="jobC">
    </div>
    <div class="accLieuJobConjoin">
        <label for="lieuJobC">Adresse du lieu de travail du conjoin</label>
        <input type="text" name="lieuJobC" id="lieuJobC">
    </div>
    <input type="submit" name="submitted" value="Envoyer">
</form>



<?php
