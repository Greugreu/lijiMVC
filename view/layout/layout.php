<?php
$validation = new \App\Service\Validation();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/001a252c18.js" crossorigin="anonymous"></script>
    <!-- Mapbox GL JS -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'/>
    <!-- Geocoder plugin -->
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet'
          href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css'
          type='text/css'/>
    <!-- Turf.js plugin -->
    <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">

</head>
<body>
<div class="container-fluid">
    <header>

        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs ">
            <a class="navbar-brand" href="<?= $view->path('home'); ?>"><img src="asset/img/logo.png" width="120"
                                                                            height="80" alt="" class="logo"></a>
            <div class="collapse navbar-collapse">

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $view->path('home'); ?>">Home <span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $view->path('contact'); ?>">contact</a>
                    </li>
                    <?php if ($validation->isLogged() == true) { ?>
                        <li class="nav-item"><a class="nav-link" href="<?= $view->path('account') ?>">Mon Compte</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= $view->path('logout') ?>">Déconnexion</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $view->path('login'); ?>">connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $view->path('register'); ?>">inscription</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/WPliji" target="_blank">Espace
                            Pro</a></li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                        <h3>Liji</h3>
                        <p>Nous vous proposons de garder vos enfants à l'aide de professionnels agrée en garderie ou
                            directement chez vous !</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                        <h2>liens utiles</h2>
                        <ul>
                            <li><a href="<?= $view->path('cgu') ?>">CGU</a></li>
                            <li><a href="<?= $view->path('mentions') ?>">Mentions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
                        <h2>Suivez-nous</h2>
                        <p>Nos réseaux</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
                        <h2>Contact</h2>
                        <p><i class="fa fa-home mr-3 "></i> 16 rue du petit galopin</p>
                        <p><i class="fa fa-envelope mr-3"></i>liji@gmail.com</p>
                        <p><i class="fa fa-phone mr-3"></i>+33 6 52 16 33 45</p>
                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>Tout droits réservés &copy;Liji.2020</p>
            </div>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="<?= $view->asset('js/main.js'); ?>"></script>
</div>
</body>
</html>
