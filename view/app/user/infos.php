
<?php

$userModel = new \App\Model\UserModel();
$user = $userModel->findUsersById($_SESSION['id']);

?>



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
                        <li class="a">
                            <a href="<?= $view->path('account') ?>">
                                <i class="glyphicon glyphicon-home"></i>
                                Tableau de bord </a>
                        </li>
                        <li class="active">
                            <a href="<?= $view->path('infos') ?>">
                                <i class="glyphicon glyphicon-user"></i>
                                Informations du compte </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h2>Informations du compte</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                            <form id="contact-form" class="form" action="#" method="POST" role="form">
                                <div class="form-group">
                                    <label class="form-label" for="name">Your Name</label>
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           name="name"
                                           placeholder="Your name"
                                           tabindex="1"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Your Email</label>
                                    <input type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           placeholder="Your Email"
                                           tabindex="2"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text"
                                           class="form-control"
                                           id="subject"
                                           name="subject"
                                           placeholder="Subject"
                                           tabindex="3">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea rows="5"
                                              cols="50"
                                              name="message"
                                              class="form-control"
                                              id="message"
                                              placeholder="Message..."
                                              tabindex="4"
                                              required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-start-order">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php

