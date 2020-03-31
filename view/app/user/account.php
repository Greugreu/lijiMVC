<h1><?= $message ?></h1>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="account-nav">
    <nav>
        <ul>
            <li><a href="<?= $view->path('accountKids') ?>">Mes enfants</a></li>
        </ul>
    </nav>
</div>

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Addresse</th>
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
        <td><?php echo $user->mail ?></td>
        <td><?php echo $user->telphone ?></td>
        <td><?php echo $user->job ?></td>
        <td><?php echo $user->lieuJob ?></td>
        <td><?php echo $user->telJob ?></td>
        <td><?php echo $user->createdAt ?></td>
        <td><?php echo $user->modifiedAt ?></td>
    </tr>
    </tbody>
</table>
