<h1><?= $message ?></h1>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="account-nav">
    <nav>
        <ul>
            <li><a href="<?= $view->path('account') ?>">Retour</a></li>
            <li><a href="<?= $view->path('registerKids') ?>">Inscrire un nouvel enfant</a></li>
        </ul>
    </nav>
</div>

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo ucfirst($kids->nom); ?></td>
        <td><?php echo ucfirst($kids->prenom); ?></td>
        <td><?php echo $kids->age ?></td>
    </tr>
    </tbody>
</table>


