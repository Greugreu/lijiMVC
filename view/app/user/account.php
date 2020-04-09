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
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Tableau de bord </a>
                    </li>
                    <li>
                        <a href="<?= $view->path('infos') ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Informations du compte </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
            <h2>Mes rendez vous</h2>
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>Nom de l'établissement</th>
                    <th>Enfants</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date</th>
                    <th>Horaires</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Ludibulle</td>
                    <td>Corentin, Kévin</td>
                    <td>contact@ludibulle.fr</td>
                    <td>0123456789</td>
                    <td>23 Avril 2020</td>
                    <td>9h00 - 12h30</td>
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
        </div>
    </div>
</div>


