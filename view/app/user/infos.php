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
                    <li>
                        <a href="<?= $view->path('account') ?>">
                            <i class="fas fa-house-user"></i>
                            Tableau de bord </a>
                    </li>
                    <li class="active">
                        <a href="<?= $view->path('infos') ?>">
                            <i class="fas fa-user"></i>
                            Informations du compte </a>
                    </li>
                    <li>
                        <a href="<?= $view->path('accountKids') ?>">
                            <i class="fas fa-child"></i>
                            Enfants </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
            <h2>Vos informations</h2>
                        <form id="contact-form" class="form" action="#" method="POST" role="form">
                            <div class="form-group">
                                <label class="form-label" for="name">Votre nom</label>
                                <input type="text"
                                       class="form-control"
                                       id="nom"
                                       name="nom"
                                       placeholder="Votre nom"
                                       tabindex="1"
                                       value="<?= $user->nom ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="prenom">Votre prenom</label>
                                <input type="text"
                                       class="form-control"
                                       id="prenom"
                                       name="prenom"
                                       placeholder="Votre prenom"
                                       tabindex="2"
                                       value="<?= $user->prenom ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="adresse">Votre adresse</label>
                                <input type="text"
                                       class="form-control"
                                       id="adresse"
                                       name="adresse"
                                       placeholder="Votre adresse"
                                       tabindex="3"
                                       value="<?= $user->adresse ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="region">Région</label>
                                <input type="text"
                                       class="form-control"
                                       id="region"
                                       name="region"
                                       placeholder="Région"
                                       tabindex="4"
                                       value="<?= $user->region ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telephone">Numéro de téléphone</label>
                                <input type="text"
                                       class="form-control"
                                       id="telephone"
                                       name="telephone"
                                       placeholder="Numéro de téléphone"
                                       tabindex="5"
                                       value="<?= $user->telephone ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="mail">Adresse mail</label>
                                <input type="text"
                                       class="form-control"
                                       id="mail"
                                       name="mail"
                                       placeholder="adresse mail"
                                       tabindex="6"
                                       value="<?= $user->mail ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="job">Travail</label>
                                <input type="text"
                                       class="form-control"
                                       id="job"
                                       name="job"
                                       placeholder="Travail"
                                       tabindex="7"
                                       value="<?= $user->job ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="lieuJob">Adresse de travail</label>
                                <input type="text"
                                       class="form-control"
                                       id="lieuJob"
                                       name="lieuJob"
                                       placeholder="Adresse de travail"
                                       tabindex="8"
                                       value="<?= $user->lieuJob ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telJob">Téléphone de travail</label>
                                <input type="text"
                                       class="form-control"
                                       id="telJob"
                                       name="telJob"
                                       placeholder="Téléphone de travail"
                                       tabindex="9"
                                       value="<?= $user->telJob ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nomConjoin">Nom du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="nomConjoin"
                                       name="nomConjoin"
                                       placeholder="Nom du conjoin"
                                       tabindex="9"
                                       value="<?= $user->nomConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="prenomConjoin">Prénom du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="prenomConjoin"
                                       name="prenomConjoin"
                                       placeholder="Prénom du conjoin"
                                       tabindex="9"
                                       value="<?= $user->prenomConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="adresseConjoin">Adresse du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="adresseConjoin"
                                       name="adresseConjoin"
                                       placeholder="Adresse du conjoin"
                                       tabindex="9"
                                       value="<?= $user->adresseConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telephoneConjoin">Téléphone du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="telephoneConjoin"
                                       name="telephoneConjoin"
                                       placeholder="Téléphone du conjoin"
                                       tabindex="9"
                                       value="<?= $user->telephoneConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="mobileConjoin">Mobile du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="mobileConjoin"
                                       name="mobileConjoin"
                                       placeholder="Mobile du conjoin"
                                       tabindex="9"
                                       value="<?= $user->mobileConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jobConjoin">Travail du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="jobConjoin"
                                       name="jobConjoin"
                                       placeholder="Travail du conjoin"
                                       tabindex="9"
                                       value="<?= $user->jobConjoin ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="lieuConjoin">Lieu de travail du conjoin</label>
                                <input type="text"
                                       class="form-control"
                                       id="lieuConjoin"
                                       name="lieuConjoin"
                                       placeholder="Lieu de travail du conjoin"
                                       tabindex="9"
                                       value="<?= $user->lieuConjoin ?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submitted" class="btn btn-start-order">Envoyer</button>
                            </div>
                        </form>
                    </div>
    </div>
</div>


<?php

