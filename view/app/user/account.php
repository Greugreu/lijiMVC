<h1><?= $message ?></h1>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="account-nav">
    <nav>
        <ul>
            <li><a href="<?= $view->path('accountKids') ?>">Mes enfants</a></li>
            <li><a href="<?= $view->path('infos') ?>">Compléter mes informations</a></li>
        </ul>
    </nav>
</div>

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Région</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Travail</th>
        <th>Addresse du lieu de travail</th>
        <th>Téléphone du lieu de travail</th>
        <th>Inscrit le</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->nom; ?></td>
        <td><?php echo $user->prenom ?></td>
        <td><?php echo $user->adresse ?></td>
        <td><?php echo $user->region ?></td>
        <td><?php echo $user->mail ?></td>
        <td><?php echo $user->telephone ?></td>
        <td><?php echo $user->job ?></td>
        <td><?php echo $user->lieuJob ?></td>
        <td><?php echo $user->telJob ?></td>
        <td><?php echo $user->createdAt ?></td>
    </tr>
    </tbody>
</table>

<h2>Autre personne responsable</h2>

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Travail</th>
        <th>Addresse du lieu de travail</th>
        <th>Numéro mobile</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->nomConjoin; ?></td>
        <td><?php echo $user->prenomConjoin ?></td>
        <td><?php echo $user->adresseConjoin ?></td>
        <td><?php echo $user->telephoneConjoin ?></td>
        <td><?php echo $user->jobConjoin ?></td>
        <td><?php echo $user->lieuConjoin ?></td>
        <td><?php echo $user->mobileConjoin ?></td>
    </tr>
    </tbody>
</table>
