<h1>
    <?= $message ?>
</h1>

<form action="#" method="post">
    <div class="formNom">
        <label for="nom"></label>
        <?= $form->input('text', 'nom', 'Votre nom') ?>
        <?php if (!empty($errors['nom'])) {
            echo '<span class="error">'.$errors['nom'].'</span>';
        } ?>
    </div>
    <div class="fromPrenom">
        <label for="prenom"></label>
        <?= $form->input('text', 'prenom', 'Votre prenom') ?>
        <?php if (!empty($errors['prenom'])) {
            echo '<span class="error">'.$errors['prenom'].'</span>';
        } ?>
    </div>
    <div class="formMail">
        <label for="mail"></label>
        <?= $form->input('email', 'mail', 'Votre mail') ?>
        <?php if (!empty($errors['mail'])) {
            echo '<span class="error">'.$errors['mail'].'</span>';
        } ?>
    </div>
    <div class="formPassword">
        <label for="password"></label>
        <?= $form->input('password', 'password', 'Votre mot de passe') ?>
        <?php if (!empty($errors['password'])) {
            echo '<span class="error">'.$errors['password'].'</span>';
        } ?>
    </div>
    <div class="cfrmPassword">
        <label for="cfrm"></label>
        <?= $form->input('password', 'cfrm', 'Confirmez votre mot de passe') ?>
        <?php if (!empty($errors['cfrm'])) {
            echo '<span class="error">'.$errors['cfrm'].'</span>';
        } ?>
    </div>
    <div class="cgu">
        <label for="cgu">Veuillez accépter les CGU</label>
        <?= $form->inputCheckbox('checkbox', 'cgu', true) ?>
        <?php if (!empty($errors['cgu'])) {
            echo '<span class="error">'.$errors['cgu'].'</span>';
        } ?>
    </div>
    <div class="register">
        <?= $form->input('submit', 'submitted', NULL, 'Envoyer') ?>
    </div>
</form>

<?php
