<?php
    $title = "Mon parcours professionnel - Etudiant Ingésup - Axel Floquet-Trillot";
    require_once('head.php');
?>
<body>
    <?php require_once('navbar.php'); ?>
    <!-- DEBUT container -->
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-12">
                <!-- DEBUT Onglets -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="active" role="presentation">
                        <a href="#etudes" aria-controls="etudes" role="tab" data-toggle="pill">
                            <p><strong>Etudes</strong></p>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#stages" aria-controls="stage" role="tab" data-toggle="pill">
                            <p><strong>Stage</strong></p>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#associatif" aria-controls="associatif" role="tab" data-toggle="pill">
                            <p><strong>Associatif</strong></p>
                        </a>
                    </li>
                </ul>
                <!-- FIN Onglets -->
            </div>
        </div>
        <div class="row text-justify">
            <!-- DEBUT Contenu Onglets -->
            <div class="tab-content">
                <!-- DEBUT Etudes -->
                <div class="tab-pane fade in active" id="etudes">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-pro/hoche.jpg" alt="" class="img-responsive img-rounded center-block logo-hoche" width="130">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="ligne-temps"></div>
                                    <div class="date center-block flex">
                                        <h4>2009 - 2012</h4> </div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Etudes secondaires au Lycée Hoche à Versailles</strong></p>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Juin 2012</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Obtention du Baccalauréat Général Scientifique</strong></p>
                                    <ul>
                                        <li>Option Sciences de la Vie et de la Terre</li>
                                        <li>Spécialité Physique - Chimie</li>
                                        <li>Mention Bien </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-pro/hoche.jpg" alt="" class="img-responsive img-rounded center-block logo-hoche" width="90"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-pro/descartes.png" alt="" class="img-responsive img-rounded center-block logo-descartes">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2012 - 2014</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Entrée en PACES à Paris Descartes</strong></p>
                                    <ul>
                                        <li>Redoublement en 2013</li>
                                        <li>Reçu-collé au concours en 2014</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2014 - 2016</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Entrée en L2 Sciences pour la Santé (Université Paris Descartes) en équivalence en septembre 2014</strong></p>
                                    <ul>
                                        <li>Obtention de la 2<sup>ème</sup> année de licence (L2) en <sup>1ère</sup> session
                                            <br>Parcours Biologie, Physiologie, Biochimie</li>
                                        <li>Obtention de la <sup>3ème</sup> année de licence (L3) en <sup>1ère</sup> session
                                            <br>Parcours Neurologie, Biochimie, Signalisation Cellulaire</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Juin 2016</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Obtention de la licence Sciences et Technologies - Mention Sciences pour la Santé</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2"> <img src="img/parcours-pro/descartes.png" alt="" class="img-responsive img-rounded center-block logo-descartes"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-pro/ingesup.jpg" alt="" class="img-responsive img-rounded center-block logo-ingesup">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2016 - 2017</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Entrée en 1ère année d'Ingésup (B1) sur le campus d'Ynov Paris</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-pro/ingesup.jpg" alt="" class="img-responsive img-rounded center-block logo-ingesup"> </div>
                    </div>
                </div>
                <!-- FIN Etudes -->
                <!-- DEBUT Stages -->
                <div class="row tab-pane fade" id="stages">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-pro/grandoptical.png" alt="" class="img-responsive img-rounded center-block logo-grdopt">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Février 2009</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Stage au Grand Optical</strong></p>
                                    <ul>
                                        <li>Fabrication de verres de lunettes</li>
                                        <li>Montage des verres</li>
                                        <li>Accueil des clients</li>
                                        <li>Gestion de commandes</li>
                                        <li>Facturation et encaissement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-pro/grandoptical.png" alt="" class="img-responsive img-rounded center-block logo-grdopt"> </div>
                    </div>
                </div>
                <!-- FIN Stages -->
                <!-- DEBUT Associatif -->
                <div class="row tab-pane fade" id="associatif">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-pro/aps.png" alt="" class="img-responsive img-rounded center-block logo-aps" width="200">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2014 - 2015</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Membre Actif de l'Amicale Paris Sciences</strong></p>
                                    <p>Réalisation de projets tout au long de l'année :</p>
                                    <ul>
                                        <li>Demandes de devis pour du matériel, ou pour des lieux</li>
                                        <li>Réalisation de montages vidéos, affiches</li>
                                        <li>Entretien d'un local, point de rencontre entre les membre de l'association et les adhérents</li>
                                        <li>Des formations suivies sur la gestion de projets et sur le fonctionnement de l'association</li>
                                    </ul>
                                    <p>Organisation d'événements :</p>
                                    <ul>
                                        <li>Des petits déjeuners</li>
                                        <li>Des afterworks</li>
                                        <li>Des soirées</li>
                                        <li>Des voyages</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2015 - 2016</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Vice-Président chargé de communication à l'Amicale Paris Sciences</strong></p>
                                    <ul>
                                        <li>Gestion d'un serveur linux hébergé par 1&amp;1</li>
                                        <li>Création d'un site basé sur Joomla!</li>
                                        <li>Création du template du site</li>
                                        <li>Gestion de comptes Facebook, Twitter, et YouTube</li>
                                        <li>Organisation d'un cours sur Photoshop</li>
                                        <li>Création des supports de communication (affiches, pin's, etc)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2016 - 2017</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Membre Ancien de l'Amicale Paris Sciences</strong></p>
                                    <ul>
                                        <li>Conseils pour le nouveau Bureau</li>
                                        <li>Aide ponctuelle pour l'organisation de certains événements</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-pro/aps.png" alt="" class="img-responsive img-rounded center-block logo-aps" width="200"> </div>
                    </div>
                </div>
                <!-- FIN Associatif -->
            </div>
            <!-- FIN Conetnu Onglets -->
        </div>
    </div>
    <!-- FIN container -->
    <?php require_once('footer.php'); ?>
    <!-- JQUERY ET BOOTSRAP JS-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/hovermenu.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/analytics.js"></script>
    <!-- FIN JS -->
</body>

</html>
