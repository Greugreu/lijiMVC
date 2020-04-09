<?php
$validation = new \App\Service\Validation();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liji</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'/>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet'
          href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css'
          type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">


</head>
<body>
<div class="wrap">
    <header>
        <img src="asset/img/logo.png" class="logo" alt="">
        <nav class="home-nav">
            <ul>
                <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
                <?php if ($validation->isLogged() == true) { ?>
                    <li><a href="<?= $view->path('logout') ?>">Déconnexion</a></li>
                    <li><a href="<?= $view->path('account') ?>">Mon Compte</a></li>
                <?php } else { ?>
                    <li><a href="<?= $view->path('login'); ?>">Connexion</a></li>
                    <li><a href="<?= $view->path('register'); ?>">Inscritpion</a></li>
                <?php } ?>
                <li><a href="<?= $view->path('home'); ?>">Home</a></li>
                <li><a href="http://localhost/WPliji/" target="_blank">Espace Pro</a></li>
                <!--                    <li><a href="<? /*= $view->path('single',array(12)); */ ?>">Single</a></li>
                                        <li><a href="<? /*= $view->path('single2',array(12,'dedede')); */ ?>">Single2</a></li>
                    -->                </ul>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="<?= $view->asset('js/main.js'); ?>"></script>
</div>
</body>
</html>
