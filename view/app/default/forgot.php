<h1>
    <?= $message ?>
</h1>

<?php if (empty($_POST)) { ?>
    <form action="#" method="post">
        <label for="mail">Votre adresse mail</label>
        <input type="email" name="mail" id="mail">
        <input type="submit" name="submitted" value="Envoyer">
    </form>
<?php } else {
    echo $html;
}
