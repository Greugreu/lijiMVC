<div class="row profile">
    <div class="col-md-3">
        <div class="profile-sidebar">
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <?php echo $user->nom . ' ' . $user->prenom; ?>
                </div>
                <div class="profile-usertitle-job">
                    Parent
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <!--<div class="profile-userbuttons">
                <button type="button" class="btn btn-success btn-sm">Follow</button>
                <button type="button" class="btn btn-danger btn-sm">Message</button>
            </div>-->
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="<?= $view->path('account') ?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Tableau de bord </a>
                    </li>
                    <li>
                        <a href="<?= $view->path('infos') ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Informations du compte </a>
                    </li>
                    <li>
                        <a href="<?= $view->path('accountKids') ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Enfants </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
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
        </div>
    </div>
</div>

