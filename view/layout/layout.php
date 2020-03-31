<?php
$validation = new \App\Service\Validation();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liji</title>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
  </head>
  <body>
    <div class="wrap">
        <header>
            <img src="asset/img/logo.png" class="logo" alt="" class="logo">
            <nav class="home-nav">
                <ul>
                    <li><a href="<?= $view->path('home'); ?>">Home</a></li>
                    <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
                    <?php if ($validation->isLogged() == true) { ?>
                        <li><a href="<?= $view->path('account') ?>">Mon Compte</a></li>
                        <li><a href="<?= $view->path('logout') ?>">Déconnexion</a></li>
                    <?php } else { ?>
                        <li><a href="<?= $view->path('login'); ?>">Connexion</a></li>
                        <li><a href="<?= $view->path('register'); ?>">Inscritpion</a></li>
                    <?php } ?>
                    <li><a href="<?= $view->path('single',array(12)); ?>">Single</a></li>
                    <li><a href="<?= $view->path('single2',array(12,'dedede')); ?>">Single2</a></li>
                </ul>
            </nav>
        </header>
        <div class="clear"></div>
        <div class="container">
            <?= $content; ?>
        </div>

        <footer>
            <nav>
                <ul>
                    <li><a href="<?= $view->path('cgu') ?>">CGU</a></li>
                    <li><a href="<?= $view->path('mentions') ?>">Mentions légales</a></li>
                </ul>
            </nav>
        </footer>

        <script src="<?= $view->asset('js/main.js'); ?>"></script>
    </div>
  </body>
</html>
