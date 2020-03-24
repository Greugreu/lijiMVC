<h1>
    <?= $message ?>
</h1>

<?php
use App\Service\Tools;

Tools::debug($_SESSION);
?>

<form action="#" method="post">
    <div class="loginMail">
        <?= $form->label('mail') ?>
        <?php echo $form->input('email', 'mail', 'Votre mail');
        if (!empty($errors['mail'])) {
            echo '<span class="error">'.$errors['mail'].'</span>';
        } ?>

    </div>

    <div class="loginPass">
        <?= $form->label('password') ?>
        <?php echo $form->input('password', 'password', 'Votre mot de passe');
        if (!empty($errors['password'])) {
            echo '<span class="error">'.$errors['password'].'</span>';
        } ?>
    </div>

    <div class="loginSubmit">
        <?= $form->input('submit', 'submitted', NULL, 'Envoyer') ?>
    </div>
</form>

<?php
