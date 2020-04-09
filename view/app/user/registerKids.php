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
            <form id="contact-form" class="form" action="#" method="POST" role="form">
                <div class="form-group">
                    <label class="form-label" for="nom">Nom de l'enfant</label>
                    <input type="text"
                           class="form-control"
                           id="nom"
                           name="nom"
                           placeholder="Nom de l'enfant"
                           tabindex="1"
                           required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="prenom">Prénom de l'enfant</label>
                    <input type="text"
                           class="form-control"
                           id="prenom"
                           name="prenom"
                           placeholder="Prénom de l'enfant"
                           tabindex="2"
                           required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="dateNaissance">Date de naissance</label>
                    <input type="date"
                           class="form-control"
                           id="dateNaissance"
                           name="dateNaissance"
                           placeholder="Date de naissance"
                           tabindex="3"
                           required>
                </div>
                <div class="form-group">
                    <label class="form-label-kids" for="prenom">L'enfant as-t-il une ou des allergies ?</label>
                    <input type="checkbox"
                           id="allergies"
                           name="allergies"
                           value="1">
                </div>
                <div class="form-group">
                    <label class="form-label" for="allergiesPlus">Renseigner son ou ses allergies, séparer par une virgule</label>
                    <input type="text"
                           class="form-control"
                           id="allergiesPlus"
                           name="allergiesPlus"
                           placeholder="Renseigner son ou ses allergies, séparer par une virgule"
                           tabindex="3"
                           required>
                </div>
                <div class="pathologie">
                    <label for="pathologie">L'enfant as-t'il une ou des pathologies handicapantes ? :</label>
                    <input type="checkbox" id="pathologie" name="pathologie"  value="1">
                </div>
                <div class="form-group">
                    <label class="form-label" for="pathologiePlus">Renseigner sa ou ses pathologies, séparer par une virgule</label>
                    <input type="text"
                           class="form-control"
                           id="pathologiePlus"
                           name="pathologiePlus"
                           placeholder="Renseigner sa ou ses pathologies, séparer par une virgule"
                           tabindex="3"
                           required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Avez vous des consignes particulières de garderie à donner pour l'enfant ?</label>
                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Avez vous des consignes particulières de garderie à donner pour l'enfant ?" tabindex="4" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="submitted" class="btn btn-start-order">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
