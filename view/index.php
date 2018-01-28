<?php
    $title = "Qui suis-je ? - Axel Floquet-Trillot";
    $canonical = "https://axelfloquet.fr";
    require_once('view/require/head.php');
?>
</head>

<?php require_once('view/require/header.php'); ?>

<!-- Slider
============================================= -->
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
    <div class="slider-parallax-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('public/images/presentation/biocode.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center" id="welcome">
                                <img data-caption-animate="fadeInUp" src="/public/images/presentation/profil.jpg" class="img-responsive img-circle center" id="profile">
                                <h2 data-caption-animate="fadeInUp">Bienvenue !</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #slider end-->

<section id="content">
    <div class="content-wrap nopadding">
        <div class="section nomargin nopadding">
            <div class="container-fluid clearfix">
                <!-- Lycée
                ============================================ -->
                <div id="lycee" class="row clearfix common-height">
                    <div class="col-md-6 center col-padding">
                        <div>
                            <div class="heading-block center">
                                <h1 data-animate="fadeInLeft">Qui suis-je ?</h1>
                            </div>
                            <p data-animate="fadeInLeft" data-delay="200" class="lead">Je m'appelle Axel Floquet-Trillot, j'ai 23 ans, et je suis aujourd'hui étudiant en informatique en première année à Ingésup sur le campus d'Ynov Paris</p>
                            <p data-animate="fadeInLeft" data-delay="400" class="lead nobottommargin">J'ai obtenu mon bac scientifique en 2012, après mes études secondaires au Lycée Hoche de Versailles. Je suis entré en PACES (Première Année Commune aux Etudes de Santé) en 2012 dans le but initial de faire médecine.</p>
                        </div>
                    </div>
                    <div class="col-md-6 center col-padding" style="background: url('public/images/presentation/hoche.jpg') center; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #lycee end -->

                <!-- PACES
                ============================================ -->
                <div id="paces" class="row clearfix common-height">
                    <div class="col-md-6 col-md-push-6 center col-padding">
                        <div>
                            <p data-animate="fadeInRight" class="lead nobottommargin">Comme une majorité d'étudiants, j'ai d'abord redoublé la PACES. J'ai ensuite été reçu-collé au concours (ma moyenne était supérieure à 10 mais mon classement, à quelques places près, ne me permettait pas d'entrer dans une des filières de santé).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 center col-padding" style="background: url('public/images/presentation/medical.jpg') center; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #paces end -->

                <!-- Licence
                ============================================ -->
                <div id="licence" class="row clearfix common-height">
                    <div class="col-md-6 col-md-push-6 center col-padding">
                        <div>
                            <p data-animate="fadeInRight" class="lead nobottommargin">J'ai obtenu une équivalence pour entrer en L2 Sciences pour la Santé. J'ai donc poursuivi mes études pendant 2 ans jusqu'à obtention du diplôme de Licence Sciences et Technologies - Mention Sciences pour la Santé en 2016. Pendant ces deux ans, J'ai surtout étudié la biologie (bactériologie, immunologie, hématologie, virologie, neurologie, etc), la biochimie (métabolisle, etc), et la physiologie (fonctionnement du corps humain sans pathologie).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 center col-padding" style="background: url('public/images/presentation/pipette.jpg') center; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #licence end -->

                <!-- APS
                ============================================ -->
                <div id="aps" class="row clearfix common-height">
                    <div class="col-md-6 center col-padding">
                        <div>
                            <p data-animate="fadeInLeft" class="lead nobottommargin">Pendant ces deux années de licence, j'ai pris le temps de construire un nouveau projet professionnel, que j'avais d'abord axé sur la neurologie. L'élément qui a déclenché ma réorientation en informatique est mon entrée dans l'Amicale Paris Sciences (l'APS, le BDE de la licence), dans lequel j'ai exercé un mandat en tant que Vice-Président chargé de la Communication.</p>
                        </div>
                    </div>
                    <div class="col-md-6 center col-padding" style="background: url('public/images/presentation/gala-aps.jpg') top center; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #aps end -->

                <!-- Site APS
                ============================================ -->
                <div id="site-aps" class="row clearfix common-height">
                    <div class="col-md-6 center col-padding">
                        <div>
                            <p data-animate="fadeInLeft" class="lead nobottommargin">Pendant ce mandat, j'ai du reconcevoir le <a target="_blank" href="https://aps-paris5.fr" title="Mon premier site">site de l'APS</a>, qui n'avait pas été mis à jour depuis plusieurs années. C'est un démarrant ce projet que j'ai appris le PHP, SQL, HTML5, et CSS3. Le site est dynamique et basé sur Joomla!. Il est aussi accessible directement par le menu, dans la catégorie Fichiers / Liens.</p>
                        </div>
                    </div>
                    <div class="col-md-6 center col-padding" style="background: url('public/images/presentation/site-aps.png') top center; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #site-aps end -->

                <!-- OpenClassrooms
                ============================================ -->
                <div id="openclassrooms" class="row clearfix common-height">
                    <div class="col-md-6 col-md-push-6 center col-padding">
                        <div>
                            <p data-animate="fadeInRight" class="lead nobottommargin">C'est après avoir codé ce site, et après avoir passé beaucoup de temps sur OpenClassrooms (avec des cours sur plusieurs langages) que je me suis décidé à entrer en première année d'Ingésup, en ingéniérie informatique.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 center col-padding" style="background: url('public/images/presentation/openclassrooms.png'); background-size: cover;">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- #openclassrooms end -->
                <div class="row clearfix common-height col-padding">
                    <div class="divider divider-border divider-center nomargin">
                        <i class="icon-terminal"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="section competences nomargin nopadding">
            <div class="container-fluid clearfix">
                <div class="heading-block center">
                    <h2>Mes compétences</h2>
                </div>
                <div class="row center bottommargin">
                    <div class="col-md-6 center bottommargin">
                        <div class="fancy-title title-center">
                            <h3>Langages</h3>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>Web</h4>
                            </div>
                            <i class="devicon-css3-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-html5-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-javascript-plain colored" data-animate="bounceIn"></i>
                            <i class="devicon-php-plain colored" data-animate="bounceIn"></i>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>Frameworks Web et CMS</h4>
                            </div>
                            <i class="devicon-bootstrap-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-jquery-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-wordpress-plain-wordmark" data-animate="bounceIn"></i>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>Programmation</h4>
                            </div>
                            <i class="devicon-c-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-csharp-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-java-plain-wordmark colored" data-animate="bounceIn"></i>
                        </div>
                    </div>
                    <div class="col-md-6 center bottommargin">
                        <div class="fancy-title title-center">
                            <h3>Outils</h3>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>Mise en ligne</h4>
                            </div>
                            <i class="devicon-apache-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-heroku-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-mysql-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-php-plain colored" data-animate="bounceIn"></i>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>OS</h4>
                            </div>
                            <i class="devicon-linux-plain" data-animate="bounceIn"></i>
                            <i class="devicon-windows8-original colored" data-animate="bounceIn"></i>
                            <i class="devicon-apple-original" data-animate="bounceIn"></i>
                        </div>
                        <div class="col-md-4 center bottommargin">
                            <div class="fancy-title title-center nobottommargin">
                                <h4>Versioning</h4>
                            </div>
                            <i class="devicon-git-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-bitbucket-plain-wordmark colored" data-animate="bounceIn"></i>
                            <i class="devicon-github-plain-wordmark" data-animate="bounceIn"></i>
                        </div>
                    </div>
                </div>
                <div class="row center nobottommargin">
                    <div class="col-md-6 bottommargin">
                        <div class="fancy-title title-center">
                            <h3>Langues</h3>
                        </div>
                        <div class="row center">
                            <div class="col-xs-4">
                                <h4 class="nobottommargin" data-animate="bounceIn">Français</h4>
                                <img src="/public/images/fr_FR.svg" alt="French flag" data-animate="bounceIn" />
                            </div>
                            <div class="col-xs-4">
                                <h4 class="nobottommargin" data-animate="bounceIn">Espagnol</h4>
                                <img src="/public/images/es_ES.svg" alt="Spanish flag" data-animate="bounceIn" />
                            </div>
                            <div class="col-xs-4">
                                <h4 class="nobottommargin" data-animate="bounceIn">Anglais</h4>
                                <img src="/public/images/en_GB-US.svg" style="height:56.66px" alt="English (US and GB) flag" data-animate="bounceIn" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bottommargin">
                        <div class="fancy-title title-center">
                            <h3>Logiciels</h3>
                        </div>
                        <svg version="1.1"
                             id="dc"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px"
                             viewBox="0 0 383.5 384.1"
                             style="enable-background:new 0 0 383.5 384.1;"
                             xml:space="preserve"
                             data-animate="bounceIn">
                            <style type="text/css">
                                .st0{display:none;}
                                .st1{fill:#E6110B;}
                                .st2{fill:#210301;}
                                .st3{fill:#FFFFFF;}
                            </style>
                            <g id="Layer_1" class="st0">
                            </g>
                            <g id="Layer_3">
                                <rect x="-0.5" class="st1" width="384" height="384"/>
                                <rect x="22.5" y="23" class="st2" width="337.9" height="337.9"/>
                                <path id="path" class="st3" d="M273,206.5c-15.5,0-35,2.7-41.3,3.7c-26.3-27.5-33.8-43.1-35.5-47.3c2.3-5.9,10.2-28.1,11.4-56.7
                                                               c0.6-14.3-2.5-25-9-31.8s-14.4-7.3-16.7-7.3c-7.9,0-21.2,4-21.2,30.9c0,23.3,10.9,48,13.9,54.4c-15.8,46.1-32.8,77.6-36.4,84.1
                                                               c-63.6,23.9-68.5,47.1-68.5,53.6c0,11.8,8.4,18.8,22.5,18.8c34.2,0,65.3-57.3,70.5-67.3c24.3-9.7,56.7-15.7,65-17.1
                                                               c23.7,22.6,51.1,28.6,62.4,28.6c8.6,0,28.6,0,28.6-20.6C318.6,213.3,294,206.5,273,206.5z M271.4,220c18.4,0,23.3,6.1,23.3,9.3
                                                               c0,2-0.8,8.6-10.7,8.6c-8.9,0-24.2-5.1-39.2-16.2C251.1,220.9,260.4,220,271.4,220z M181,80.1c1.7,0,2.8,0.5,3.7,1.8
                                                               c5.3,7.4,1,31.4-4.2,50.2c-5-16.1-8.8-40.9-3.5-49.6C178,80.9,179.2,80.1,181,80.1z M172,224.2c6.7-13.5,14.2-33.2,18.2-44.3
                                                               c8.2,13.7,19.1,26.3,25.5,33.2C196,217.3,181,221.5,172,224.2z M82.9,291.8c-0.4-0.5-0.5-1.6-0.2-2.9c0.7-2.8,6-16.5,44.4-33.7
                                                               c-5.5,8.7-14.1,21.1-23.6,30.3c-6.7,6.2-11.8,9.4-15.4,9.4C86.9,294.9,85.2,294.5,82.9,291.8z"/>
                            </g>
                        </svg>
                        <i style="position:relative; top:-20px;" class="devicon-photoshop-line colored" data-animate="bounceIn"></i>
                        <i style="position:relative; top:-20px;" class="devicon-illustrator-line colored" data-animate="bounceIn"></i>
                        <svg version="1.1"
                             id="pr"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px"
                             viewBox="0 0 437.7 434.9"
                             style="enable-background:new 0 0 437.7 434.9;"
                             xml:space="preserve"
                             data-animate="bounceIn">
                        <style type="text/css">
                            .st4{fill:#D573F7;}
                        </style>
                        <g id="Layer_x0020_1">
                            <path class="st4" d="M-1-0.2v436h438.7v-436H-1z M400.9,399.2H35.8V36.3h365.2V399.2z"/>
                            <path class="st4" d="M99.8,117.2v201l40,0.1v-63.4c13.6,0,27.8-0.1,39.3-2.6c15-3.3,25.6-10.1,35-20c9.9-10.3,17.5-24.6,17.5-45.9
                                c0-49.2-32.1-72.5-82.4-70.8L99.8,117.2z M139.8,223.1l0.1-75.1c16.7-0.3,31.3-0.1,40.9,8.4c7.5,6.7,10.3,13.9,10,30.9
                                C190.2,220.1,168.2,223.1,139.8,223.1z"/>
                            <path class="st4" d="M251.5,205.1l0.1,114.7l39.9,0.2l0.1-98.6l-0.1-4.4c14.4-12.6,23.8-16.8,43.7-16.4c1.6,0.1,2.1,0.1,2.1-2v-29
                                c0.1-5.1-1-6.5-6.9-6.3c-15.7,0.5-20.3,1.8-31.2,11c-2.3,2-9.2,10.2-9.2,10.2c0-10-2.2-16.8-5-18.9c-1.9-1.4-2.4-1.3-5.2-1.3h-5.3
                                l-22.1-0.3c-2.4,0.4-2.6,1-2.5,3.8C250.1,180.6,251.5,189.4,251.5,205.1z"/>
                        </g>
                        </svg>
                        <svg version="1.1"
                             id="ae"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px"
                             viewBox="0 0 438.5 435.2"
                             style="enable-background:new 0 0 438.5 435.2;"
                             xml:space="preserve"
                             data-animate="bounceIn">
                        <style type="text/css">
                            .st5{fill:#BC85F3;}
                        </style>
                        <g>
                            <path class="st5" d="M0-0.1v436h438.7v-436H0z M401.9,399.3H36.8V36.4h365.2V399.3z"/>
                            <path class="st5" d="M118.5,267.9l57.8,0l15.3,50.5h42.9l-60.9-203.3c-0.1-0.4-0.4-0.6-1-0.6l-50.4-0.1c-2,0-2,1-1.8,2.9
                                c0.6,7,0.3,10.9-1.2,16.4l-54,184.8l40.7-0.1L118.5,267.9z M147.5,149.5l21.5,81.8h-41.8L147.5,149.5z"/>
                            <path class="st5" d="M292.1,318.3c7.3,2,15.1,3,23,3.1c15.6,0.1,31.4-3.7,44.2-11c0.2-0.1,0.5-0.1,0.6-0.3v-0.9l0-26.3
                                c0-1.2-0.9-1.9-2.3-1.4c-16.1,4.8-70.6,20.3-73.2-28.5c0-0.4-0.1-1.5,0.3-1.5l78.8,0.1c5-6.3,5.9-18.3,5.7-26.1
                                c-0.5-31.7-21.6-62.1-59.6-62.3c-63.8-0.4-75.9,80.3-54.1,126.8C262.3,304.6,276,313.9,292.1,318.3z M309.1,191.7
                                c13.7-0.1,22.5,9.5,22.9,33c0,0.3,0,0.4,0,0.5h-7.9H284C284.2,203.9,294,191.8,309.1,191.7z"/>
                        </g>
                        </svg>
                        <img style="vertical-align: baseline;" src="/public/images/icons/3dsmax.jpg" alt="3D Studio Max" data-animate="bounceIn" />
                    </div>
                    <div class="row clearfix common-height col-padding">
                        <div class="divider divider-border divider-center nomargin">
                            <i style="position:relative;top:-15px;" class="icon-terminal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('view/require/footer.php'); ?>

</body>
</html>
