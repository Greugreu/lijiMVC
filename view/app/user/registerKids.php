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
                    <li class="">
                        <a href="<?= $view->path('account') ?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Tableau de bord </a>
                    </li>
                    <li>
                        <a href="<?= $view->path('infos') ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Informations du compte </a>
                    </li>
                    <li class="active">
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

            <form action="#" method="post">
                <div class="form_kids_nom">
                    <label for="nom">Nom :</label>
                    <?= $form->input('text', 'nom', 'Le nom de l\'enfant') ?>
                    <?php if (!empty($errors['nom'])) {
                        echo '<span class="error">'.$errors['nom'].'</span>';
                    } ?>
                </div>
                <div class="form_kids_prenom">
                    <label for="prenom">Prénom :</label>
                    <?= $form->input('text', 'prenom', 'Le prénom de l\'enfant') ?>
                    <?php if (!empty($errors['prenom'])) {
                        echo '<span class="error">'.$errors['prenom'].'</span>';
                    } ?>
                </div>
                <div class="form_kids_date">
                    <label for="dateNaissance">Date de naissance de l'enfant :</label>
                    <input type="date" id="dateNaissance" name="dateNaissance">
                    <?php if (!empty($errors['dateNaissance'])) {
                        echo '<span class="error">'.$errors['dateNaissance'].'</span>';
                    } ?>
                </div>
                <div class="form_kids_allergie">
                    <label for="allergies">L'enfant as-t'il une ou des allergies ?</label>
                    <input type="checkbox" id="allergies" name="allergies" value="1">
                </div>
                <div class="form_kids_allergie+">
                    <label for="allergies+">Renseigner son ou ses allergies, séparer par une virgule :</label>
                    <input type="text" id="allergies+" name="allergies+" placeholder="Allergies">
                </div>
                <div class="pathologie">
                    <label for="pathologie">L'enfant as-t'il une ou des pathologies handicapantes ? :</label>
                    <input type="checkbox" id="pathologie" name="pathologie"  value="1">
                </div>
                <div class="pathologie+">
                    <label for="pathologie+">Renseigner sa ou ses pathologies, séparer par une virgule :</label>
                    <input type="text" name="pathologie+" id="pathologie+" placeholder="Pathologie">
                </div>
                <div class="directives">
                    <label for="directives">Avez vous des consignes particulières de garderie à donner pour l'enfant ?</label>
                    <textarea name="directives" id="directives" cols="30" rows="10"></textarea>
                </div>
                <div class="register">
                    <?= $form->input('submit', 'submitted', NULL, 'Envoyer') ?>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
