<section class="container-fluid">

    <div class="container" id="login">

        <div class="section-content">
            <h1 class="section-header"><?= $message ?></h1>
        </div>

        <div class="login-section">
            <div class="container">
                <form>
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <div class="loginMail">
                                <?= $form->label('mail') ?>
                                <?php echo $form->input('email', 'mail', 'Votre mail');
                                if (!empty($errors['mail'])) {
                                    echo '<span class="error">' . $errors['mail'] . '</span>';
                                } ?>

                            </div>
                            <div class="loginPass">
                                <?= $form->label('password') ?>
                                <?php echo $form->input('password', 'password', 'Votre mot de passe');
                                if (!empty($errors['password'])) {
                                    echo '<span class="error">' . $errors['password'] . '</span>';
                                } ?>
                            </div>

                            <div class="loginSubmit">
                                <?= $form->input('submit', 'submitted', NULL, 'Envoyer') ?>
                            </div>
                        </div>
                </form>
                <a href="<?= $view->path('forgot'); ?>">Mot de passe oublié ?</a>
            </div>

        </div>
</section>
