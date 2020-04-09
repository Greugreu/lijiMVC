<h2><?= $message ?></h2>

<form action="#" method="post" id="pro" name="pro" class="form-control">
    <input type="text" id="nom" name="nom" placeholder="Nom">
    <input type="text" id="prenom" name="prenom" placeholder="Prenom">
    <input type="text" id="nomEntreprise" name="nomEntreprise" placeholder="nomEntreprise">
    <input type="text" id="adresse" name="adresse" placeholder="adresse">
    <input type="text" id="postal" name="postal" placeholder="postal">
    <input type="text" id="ville" name="ville" placeholder="ville">
    <input type="text" id="statut" name="statut" placeholder="statut">
    <input type="text" id="mail" name="mail" placeholder="mail">
    <input type="text" id="telephone" name="telephone" placeholder="telephone">
    <input type="text" id="siret" name="siret" placeholder="siret">
    <input type="text" id="tarif" name="tarif" placeholder="tarif">
    <input type="text" id="note" name="note" placeholder="note">
    <input type="text" id="places" name="places" placeholder="places">

    <input type="submit" name="submitted" value="Envoyer">

    <input type="text" id="longitude" name="nom" placeholder="longitude">
    <input type="text" id="latitude" name="nom" placeholder="latitude">

    <script>

        navigator.geolocation.getCurrentPosition(function (position) {
            console.log(position.coords.latitude)
            console.log(position.coords.longitude)
        })
    </script>

</form>



<?php
