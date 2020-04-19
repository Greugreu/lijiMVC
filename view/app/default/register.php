<section class="container-fluid ">
    <div class="container" id="register">
        <div class="section-content">
            <h1 class="section-header"><?= $message ?></h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="register-section">

                    <form action="#" method="post">
                        <div class="col">
                            <div class="forNom">
                                <label for="nom">Nom</label>
                                <?= $form->input('text', 'nom', 'Votre nom') ?>
                                <?php if (!empty($errors['nom'])) {
                                    echo '<span class="error">' . $errors['nom'] . '</span>';
                                } ?>
                            </div>
                            <div class="forNom">
                                <label for="prenom">Prenom</label>
                                <?= $form->input('text', 'prenom', 'Votre prenom') ?>
                                <?php if (!empty($errors['prenom'])) {
                                    echo '<span class="error">' . $errors['prenom'] . '</span>';
                                } ?>

                            </div>
                            <div class="forMail">
                                <label for="mail">Mail</label>
                                <?= $form->input('email', 'mail', 'Votre mail') ?>
                                <?php if (!empty($errors['mail'])) {
                                    echo '<span class="error">' . $errors['mail'] . '</span>';
                                } ?>
                            </div>
                            <div class="formPassword">
                                <label for="password">Mot de passe</label>
                                <?= $form->input('password', 'password', 'Votre mot de passe') ?>
                                <?php if (!empty($errors['password'])) {
                                    echo '<span class="error">' . $errors['password'] . '</span>';
                                } ?>
                            </div>
                            <div class="cfrmPassword">
                                <label for="cfrm">Confirmez votre mot de passe</label>
                                <?= $form->input('password', 'cfrm', 'Confirmez votre mot de passe') ?>
                                <?php if (!empty($errors['cfrm'])) {
                                    echo '<span class="error">' . $errors['cfrm'] . '</span>';
                                } ?>
                            </div>
                            <div class="cgu">
                                <label for="cgu">CGU</label>
                                <?= $form->inputCheckbox('checkbox', 'cgu', true) ?>
                                <?php if (!empty($errors['cgu'])) {
                                    echo '<span class="error">' . $errors['cgu'] . '</span>';
                                } ?>
                            </div>

                            <div class=" btn">
                                <?= $form->input('submit', 'submitted', NULL, 'Envoyer') ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

</section>






