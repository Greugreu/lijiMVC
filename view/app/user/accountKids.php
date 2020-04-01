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
        <th>Date de naissance</th>
        <?php if ($kids[0]->allergies == 1) { ?> <th> Allergies </th> <?php } ?>
        <?php if ($kids[0]->handicap == 1) { ?> <th> Pathologies </th> <?php } ?>
        <th>Directives</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($kids as $kid)
    { ?>
        <tr>
            <td> <?php echo ucfirst($kid->nom); ?> </td>
            <td> <?php echo ucfirst($kid->prenom); ?> </td>
            <td> <?php echo $kid->dateNaissance ?> </td>
            <?php if ($kid->allergies == 1) { ?> <td> <?php echo $kid->allergiesPlus ?> </td> <?php } ?>
            <?php if ($kid->handicap == 1) { ?> <td> <?php echo $kid->handicapPlus ?> </td> <?php } ?>
            <td> <?php echo $kid->directives ?> </td>
        </tr>
    <?php }
    ?>
    </tbody>
</table>

