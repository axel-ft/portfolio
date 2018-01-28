<?php
$title = "Mon parcours personnel - Axel Floquet-Trillot";
$canonical = "https://axelfloquet.fr/parcours-personnel";
require_once('view/require/head.php');
?>
</head>
<?php require_once('view/require/header.php'); ?>

<!-- Slider
============================================= -->
<section id="slider" class="slider-parallax swiper_wrapper clearfix" data-height-lg="450" data-height-md="400" data-height-sm="300" data-height-xs="200" data-height-xxs="300" data-autoplay="7500" data-speed="750" data-loop="true">
    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('public/images/parcours-perso/3dprinter.jpeg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/parcours-perso/code.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/parcours-perso/cible.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/parcours-perso/mtb.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/parcours-perso/camera.jpg');"></div>
            </div>
        </div>
    </div>
    <div id="slider-arrow-left">
        <i class="icon-angle-left"></i>
    </div>
    <div id="slider-arrow-right">
        <i class="icon-angle-right"></i>
    </div>
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="nobottomborder">

            <div class="container clearfix">
                <h1>Parcours personnel</h1>
            </div>

        </section><!-- #page-title end -->

</section><!-- #slider end-->


        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap nopadding">
                <div class="section nomargin nopadding">
                    <div class="container-fluid col-padding nobottompadding clearfix">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active">
                                <a id="activites-pill" data-toggle="pill" href="#activites"><h2 class="nomargin noppading">Activités</h2></a>
                            </li>
                            <li>
                                <a id="apprentissage-pill" data-toggle="pill" href="#apprentissage"><h2 class="nomargin nopadding">Apprentissage</h2></a>
                            </li>
                            <li>
                                <a id="sports-pill" data-toggle="pill" href="#sports"><h2 class="nomargin nopadding">Sports</h2></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section nomargin nopadding">
                    <div class="container-fluid clearfix topmargin tab-content">

                        <!-- Activités
                        ============================================= -->
                        <div id="activites" class="tab-pane fade in active clearfix">
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Impression 3D</h2>
                                        </div>
                                        <p data-animate="fadeInLeft" data-delay="200" class="lead">L'impression 3D est devenue, depuis juin 2016, une activité principale pendant mon temps libre. Je dispose d'une Original Prusa i3 MK2, assemblée par mes soins à sa réception.</p>
                                        <p data-animate="fadeInLeft" data-delay="400" class="lead">Le volume d'impression disponible est de 25cm x 21cm x 20cm (LxPxH), et la précision peut aller jusqu'à 50µm.</p>
                                        <p data-animate="fadeInLeft" data-delay="600" class="lead">J'imprime des pièces pour moi, et je suis référencé en tant que particulier sur <a href="https://www.3dhubs.com/service/axelft" target="_blank" >3DHubs</a>, un site de vente de pièces imprimées. Le principe est très simple : </p>
                                        <ul data-animate="fadeInLeft" data-delay="800" class="lead justify">
                                            <li>Une personne m'envoie un ou plusieurs modèles via le site</li>
                                            <li>Je vérifie ses fichiers et peut accepter (ou décliner) la commande</li>
                                            <li>Le client procède au paiement juste avant le début de l'Impression</li>
                                            <li>Dès l'impression terminée, la livraison est  programmée</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/3dprinter.jpeg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Modélisation 3D</h2>
                                        </div>
                                        <p data-animate="fadeInLeft" data-delay="200" class="lead">Que ce soit pour l'impression ou le plaisir de dessiner, je maitrise le logiciel de modélisation 3D Studio Max d'Autodesk pour réaliser scènes et objets.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/modelisation.png') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/code.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInRight">Développement Web</h2>
                                        </div>
                                        <p data-animate="fadeInRight" data-delay="200" class="lead">J'ai participé à la création ou à la modification de certains sites. Parmi eux, j'ai entièrement recréé le <a href="https://aps-paris5.fr" target="_blank">site de l'APS</a> pendant mon mandat de Vice-Président chargé de la Communication. J'ai également créé, modifié ou placé certains éléments sur <a href="http://www.osmosart.com" target="_blank">Osmosart</a>, un site d'actualité artistique.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/vis.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInRight">Montage, nettoyage, installation et réparation d'ordinateurs</h2>
                                        </div>
                                        <p data-animate="fadeInRight" data-delay="200" class="lead">On me prête régulièrement des ordinateurs afin de : </p>
                                        <ul data-animate="fadeInRight" data-delay="400" class="lead justify">
                                            <li>Les réparer au niveau matériel ou logiciel</li>
                                            <li>Récupérer des données</li>
                                            <li>Réinstaller le système d'exploitation</li>
                                            <li>Procéder à une désinfection (virus, adware, etc)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Autres</h2>
                                        </div>
                                        <p data-animate="fadeInLeft" data-delay="200" class="lead">Une liste rapide concernant mes autres activités :</p>
                                        <ul data-animate="fadeInLeft" data-delay="400" class="lead justify">
                                            <li>Ecouter de la musique (beaucoup...)</li>
                                            <li>Regarder des films ou des séries</li>
                                            <li>Photographie</li>
                                            <li>Montage vidéo</li>
                                            <li>Lecture</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/camera.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div><!-- #activites end -->

                        <!-- Apprentissage
                        ============================================= -->
                        <div id="apprentissage" class="tab-pane fade clearfix">
                            <div class="row">
                                <div class="col-md-12 center">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInDown">OpenClassrooms</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <p data-animate="fadeInLeft" data-delay="200" class="lead">Cours démarrés :</p>
                                        <ul data-animate="fadeInLeft" data-delay="400" class="lead justify">
                                            <li>Apprenez à programmer en C!</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="cbar" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                    58%
                                                </div>
                                            </div>
                                            <li>Dynamisez vos sites avec JavaScript</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="jsbar" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">
                                                    42%
                                                </div>
                                            </div>
                                            <li>Les clés pour réussir son référencement Web</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="refbar" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                                                    32%
                                                </div>
                                            </div>
                                            <li>Apprenez à programmer en orienté objet en PHP</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="phpbar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                                                    12%
                                                </div>
                                            </div>
                                            <li>Prenez en main Bootstrap</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="bootstrapbar" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                    8%
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <p data-animate="fadeInRight" data-delay="200" class="lead">Cours terminés :</p>
                                        <ul data-animate="fadeInRight" data-delay="400" class="lead justify">
                                            <li>En profondeur avec l'assembleur</li>
                                            <li>Apprenez à programmer en assembleur x86!</li>
                                            <li>Concevez votre site Web avec PHP et MySQL</li>
                                            <li>Apprenez à créer votre site Web avec HTML5 et CSS3</li>
                                            <li>Comprendre le Web</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix common-height col-padding">
                                <div class="divider divider-border divider-center nomargin">
                                    <i class="icon-terminal"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 center">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInDown">CodeCademy</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <p data-animate="fadeInLeft" data-delay="200" class="lead">Cours démarrés :</p>
                                        <ul data-animate="fadeInLeft" data-delay="400" class="lead justify">
                                            <li>Apprenez AngularJS1.X</li>
                                            <div class="progress topmarg10">
                                                <div class="progress-bar progress-bar-striped active" id="angjsbar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    50%
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <p data-animate="fadeInRight" data-delay="200" class="lead">Cours terminés :</p>
                                        <ul data-animate="fadeInRight" data-delay="400" class="lead justify">
                                            <li>Apprendre l'outil de ligne de commande</li>
                                            <li>Créer un site</li>
                                            <li>Apprendre Git</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix common-height col-padding">
                                <div class="divider divider-border divider-center nomargin">
                                    <i class="icon-terminal"></i>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-4 center col-padding" style="background: url('public/images/parcours-perso/browser.png') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="col-md-4 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInDown">Google & Stack Overflow</h2>
                                        </div>
                                        <p data-animate="fadeInUp" data-delay="200" class="lead"><strong>Google est mon ami !</strong></p>
                                        <p data-animate="fadeInUp" data-delay="400" class="lead">C'est le site qui me permet très souvent de résoudre les problèmes dans mon code. Stack Overflow est aussi une grande source de résolution de problèmes.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 center col-padding" style="background: url('public/images/parcours-perso/key.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div><!-- #apprentissage end -->

                        <!-- Sports
                        ============================================= -->
                        <div id="sports" class="tab-pane fade clearfix">
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Tir à l'arc</h2>
                                            <span data-animate="fadeInLeft" class="divcenter">En cours</span>
                                        </div>
                                        <ul data-animate="fadeInLeft" data-delay="200" class="lead center noliststyle">
                                            <li>Flèche Bleue</li>
                                            <li>Arc classique</li>
                                            <li>Tir jusqu'à 30m</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/cible.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Gymnastique aux agrès</h2>
                                            <span data-animate="fadeInLeft" class="divcenter">En cours</span>
                                        </div>
                                        <ul data-animate="fadeInLeft" data-delay="200" class="lead center noliststyle">
                                            <li>Sol</li>
                                            <li>Trampoline</li>
                                            <li>Barres parallèles</li>
                                            <li>Saut</li>
                                            <li>Barre fixe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/gym.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/mtb.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInRight">Autres sports</h2>
                                        </div>
                                        <p data-animate="fadeInRight" data-delay="200" class="lead center">Je pratique également à plusieurs reprises dans l'année les sports suivants : </p>
                                        <ul data-animate="fadeInRight" data-delay="400" class="lead center noliststyle">
                                            <li>Roller</li>
                                            <li>Patinage</li>
                                            <li>V.T.T. en forêt</li>
                                            <li>Kite-MountainBoard</li>
                                            <li>Ski</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-3 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Aïkibudo</h2>
                                            <span data-animate="fadeInLeft" class="divcenter">4 ans</span>
                                        </div>
                                        <ul data-animate="fadeInLeft" data-delay="200" class="lead center noliststyle">
                                            <li>Ceinture bleue</li>
                                            <li>Katas</li>
                                            <li>Combats</li>
                                            <li>Initiation au couteau et au sabre</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h2 data-animate="fadeInLeft">Karaté</h2>
                                            <span data-animate="fadeInLeft" class="divcenter">2 ans</span>
                                        </div>
                                        <ul data-animate="fadeInLeft" data-delay="200" class="lead center noliststyle">
                                            <li>Ceinture orange</li>
                                            <li>Katas</li>
                                            <li>Combats</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/aikido.jpg') bottom; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                            <div class="row common-height">
                                <div class="col-md-6 center col-padding">
                                    <div>
                                        <div class="heading-block center">
                                            <h3 data-animate="fadeInLeft">Natation</h3>
                                            <span data-animate="fadeInLeft" class="divcenter">4 ans</span>
                                        </div>
                                        <ul data-animate="fadeInLeft" data-delay="200" class="lead center noliststyle">
                                            <li>4 nages</li>
                                            <li>Participation à quelques compétitions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 center col-padding" style="background: url('public/images/parcours-perso/natation.jpg') center; background-size: cover;">
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div><!-- #sports end -->

                    </div>
                </div>

            </div>

        </section><!-- #content end -->

        <?php require_once('view/require/footer.php'); ?>

        <script type="text/javascript">
            document.getElementById('activites-pill').addEventListener('click', () => setTimeout(SEMICOLON.initialize.maxHeight, 175), false);
            document.getElementById('apprentissage-pill').addEventListener('click', () => setTimeout(SEMICOLON.initialize.maxHeight, 175), false);
            document.getElementById('sports-pill').addEventListener('click', () => setTimeout(SEMICOLON.initialize.maxHeight, 175), false);
        </script>

</body>
</html>
