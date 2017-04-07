<?php
    $title = "Mon parcours personnel - Axel Floquet-Trillot";
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
                    <li class="active" role="presentation"><a href="#activites" aria-controls="stage" role="tab" data-toggle="pill"><strong>Activités</strong></a></li>
                    <li role="presentation"><a href="#apprentissage" aria-controls="apprentissage" role="tab" data-toggle="pill"><strong>Apprentissage</strong></a></li>
                    <li role="presentation"><a href="#sports" aria-controls="sports" role="tab" data-toggle="pill"><strong>Sports</strong></a></li>
                </ul>
                <!-- FIN Onglets -->
            </div>
        </div>
        <div class="row text-justify">
            <!-- DEBUT Contenu Onglets -->
            <div class="tab-content">
                <!-- DEBUT Activités -->
                <div class="tab-pane fade in active" id="activites">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-perso/3dprinter.jpg" alt="" class="img-responsive img-rounded center-block printer">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4 class="hidden-xs">Impression 3D</h4>
                                        <h4 class="visible-xs">Imp 3D</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>J'imprime vos pièces en 3D !</strong></p>
                                    <p>L'impression 3D est devenue, depuis juin 2016, une activité principale pendant mon temps libre. Je dispose d'une Original Prusa i3 MK2, assemblée par mes soins à sa réception.</p>
                                    <p>Le volume d'impression disponible est de 25cm x 21cm x 20cm (LxPxH), et la précision peut aller jusqu'à 50µm.</p>
                                    <p>J'imprime des pièces pour moi, et je suis référencé en tant que particulier sur <a href="https://www.3dhubs.com/service/axelft" target="_blank" title="Mon profil sur 3DHubs">3DHubs</a>, un site de vente de pièces imprimées. Le principe est très simple :</p>
                                    <ul>
                                        <li>Une personne m'envoie un ou plusieurs modèles via le site</li>
                                        <li>Je vérifie ses fichiers et peut accepter (ou décliner) la commande</li>
                                        <li>Le client procède au paiement juste avant le début de l'impression</li>
                                        <li>Dès l'impression terminée, la livraison est programmée</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Dessin 3D</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>3D Studio Max</strong></p>
                                    <p>Que ce soit pour l'impression ou le plaisir de dessiner, je maîtrise le logiciel de modélisation 3D Studio Max pour réaliser scènes et objets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/3dprinter.jpg" alt="" class="img-responsive img-rounded center-block printer"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-perso/vis.jpg" alt="" class="img-responsive img-rounded center-block vis">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Sites</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Je participe à la création / modification de certains sites</strong></p>
                                    <p>Quelques fois par mois, j'aide à modifier ou à placer des éléments sur un site d'actualité artistique : <a href="http://www.osmosart.com" target="_blank">Osmosart</a></p>
                                    <p>J'ai également proposé à un médecin du sport de refaire son site, celui-ci n'étant pas responsive, et donc non adapté aux affichages actuels tels que les téléphones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4 class="hidden-xs">Réparations</h4>
                                        <h4 class="visible-xs">Rép</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Nettoyage, installation et réparation d'ordinateurs</strong></p>
                                    <p>On me prête régulièrement des ordinateurs afin de :</p>
                                    <ul>
                                        <li>Les réparer au niveau matériel ou logiciel</li>
                                        <li>Récupérer des données</li>
                                        <li>Réinstaller le système d'exploitation</li>
                                        <li>Procéder à une désinfection (virus, adware...)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/vis.jpg" alt="" class="img-responsive img-rounded center-block vis"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-perso/camera.jpg" alt="" class="img-responsive img-rounded center-block camera">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Autres</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Une liste rapide concernant mes autres activités : </strong></p>
                                    <ul>
                                        <li>Ecouter de la musique (beaucoup...)</li>
                                        <li>Regarder des films ou des séries</li>
                                        <li>Photographie</li>
                                        <li>Montage vidéo</li>
                                        <li>Lire</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/camera.jpg" alt="" class="img-responsive img-rounded center-block camera"> </div>
                    </div>
                </div>
                <!-- FIN Activités -->

                <!-- DEBUT Apprentissage -->
                <div class="row tab-pane fade" id="apprentissage">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-perso/key.jpg" alt="" class="img-responsive img-rounded center-block key">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Open<br>Classrooms</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Cours demarrés sur OpenClassrooms :</strong></p>
                                    <ul>
                                        <li>Apprenez à programmer en C !</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="c" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                58%
                                            </div>
                                        </div>
                                        <li>Dynamisez vos sites avec JavaScript</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="js" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">
                                                42%
                                            </div>
                                        </div>
                                        <li>Les clés pour réussir son référencement Web</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="ref" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                                                32%
                                            </div>
                                        </div>
                                        <li>Apprenez à programmer en orienté objet en PHP</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="phpobj" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                                                12%
                                            </div>
                                        </div>
                                        <li>Prenez en main Bootstrap</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="bootstrap" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                8%
                                            </div>
                                        </div>
                                    </ul>
                                    <p><strong>Cours terminés sur OpenClassrooms :</strong></p>
                                    <ul>
                                        <li>Concevez votre site Web avec PHP et MySQL</li>
                                        <li>Apprenez à créer votre site Web avec HTML5 et CSS3</li>
                                        <li>Comprendre le Web</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>CodeCademy</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Cours demarrés sur CodeCademy :</strong></p>
                                    <ul>
                                        <li>Apprendre AngularJS1.X</li>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" id="angular" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                50%
                                            </div>
                                        </div>
                                    </ul>
                                    <p><strong>Cours terminés sur CodeCademy :</strong></p>
                                    <ul>
                                        <li>Apprendre l'outil de ligne de commande</li>
                                        <li>Créer un site </li>
                                        <li>Apprendre Git</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/key.jpg" alt="" class="img-responsive img-rounded center-block key"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="visible-xs col-xs-offset-3 col-xs-6"> <img src="img/parcours-perso/browser.png" alt="" class="img-responsive img-rounded center-block google">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Google<br>&amp;<br>Stack overflow</h4></div>
                                </div>
                                <div class="col-xs-8 col-sm-7 flex">
                                    <p><strong>Google est mon ami !</strong></p>
                                    <p>C'est le site qui me permet très souvent de résoudre les problèmes dans mon code. Stack Overflow est aussi une grande source de résolution de problèmes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/browser.png" alt="" class="img-responsive img-rounded center-block google"> </div>
                    </div>
                </div>
                <!-- FIN Apprentissage -->

                <!-- DEBUT Sports -->
                <div class="tab-pane fade" id="sports">
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-perso/cible.jpg" alt="" class="img-responsive img-rounded center-block logo-hoche">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center">
                                    <div class="ligne-temps"></div>
                                    <div class="date center-block flex">
                                        <h4>En cours</h4> </div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Tir à l'arc</strong></p>
                                    <ul>
                                        <li>Flèche blanche</li>
                                        <li>Arc classique</li>
                                        <li>Tir jusqu'à 15m</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/cible.jpg" alt="" class="img-responsive img-rounded center-block cible"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-perso/gym.jpg" alt="" class="img-responsive img-rounded center-block gym">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="ligne-temps"></div>
                                    <div class="date center-block flex">
                                        <h4>En cours</h4> </div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Gymnastique aux agrès</strong></p>
                                    <ul>
                                        <li>Sol</li>
                                        <li>Trampoline</li>
                                        <li>Barres parallèles</li>
                                        <li>Saut</li>
                                        <li>Barre fixe</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/gym.jpg" alt="" class="img-responsive img-rounded center-block gym"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-perso/mtb.jpg" alt="" class="img-responsive img-rounded center-block mtb">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>Parfois</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Je pratique également à plusieurs reprises dans l'année les sports suivants :</strong></p>
                                    <ul>
                                        <li>Roller</li>
                                        <li>Patinage</li>
                                        <li>V.T.T. en forêt</li>
                                        <li>Kite-Mountainboard</li>
                                        <li>Ski</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/mtb.jpg" alt="" class="img-responsive img-rounded center-block mtb"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-perso/aikido.jpg" alt="" class="img-responsive img-rounded center-block aikido">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>4 ans</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Aïkibudo</strong></p>
                                    <ul>
                                        <li>Ceinture bleue</li>
                                        <li>Katas</li>
                                        <li>Combats</li>
                                        <li>Initiation au couteau et au sabre</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center flex">
                                    <div class="date center-block flex">
                                        <h4>2 ans</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Karaté</strong></p>
                                    <ul>
                                        <li>Ceinture orange</li>
                                        <li>Katas</li>
                                        <li>Combats</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2"> <img src="img/parcours-perso/aikido.jpg" alt="" class="img-responsive img-rounded center-block aikido"> </div>
                    </div>
                    <div class="row filiere">
                        <div class="row visible-xs">
                            <div class="col-xs-6 col-xs-offset-3 visible-xs"> <img src="img/parcours-perso/natation.jpg" alt="" class="img-responsive img-rounded center-block natation">
                                <br> </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <div class="row flex flex-row">
                                <div class="col-xs-3 col-sm-5 text-center">
                                    <div class="date center-block flex">
                                        <h4>4 ans</h4></div>
                                </div>
                                <div class="col-xs-9 col-sm-7 flex">
                                    <p><strong>Natation</strong></p>
                                    <ul>
                                        <li>4 nages</li>
                                        <li>Participation à quelques compétitions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 col-md-2 flex"> <img src="img/parcours-perso/natation.jpg" alt="" class="img-responsive img-rounded center-block natation"> </div>
                    </div>
                </div>
                <!-- FIN Sports -->
            </div>
            <!-- FIN Contenu Onglets -->
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
