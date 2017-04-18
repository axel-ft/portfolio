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
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Bienvenue !</h2>
                            <p data-caption-animate="fadeInUp">Je m'appelle Axel Floquet-Trillot, j'ai 23 ans, et je suis aujourd'hui étudiant en informatique en première année à Ingésup sur le campus d'Ynov Paris</p>
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
                            <p data-animate="fadeInLeft" data-delay="200" class="lead nobottommargin">J'ai obtenu mon bac scientifique en 2012, après mes études secondaires au Lycée Hoche de Versailles. Je suis entré en PACES (Première Année Commune aux Etudes de Santé) en 2012 dans le but initial de faire médecine.</p>
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
        <div class="section nomargin nopadding">
            <div class="container-fluid clearfix">
                <div class="heading-block center">
                    <h2>Mes compétences</h2>
                </div>
                <div class="col-md-1 col-md-offset-1 center nobottommargin">
                    <div class="fancy-title title-center">
                        <h3>Langues</h3>
                    </div>
                    <h4 class="nobottommargin" data-animate="bounceIn">Français</h4>
                    <div class="rounded-skill" data-color="#009933" data-size="70" data-percent="100" data-width="3" data-speed="2000">
                        <div class="counter counter-inherit"><span data-from="1" data-to="100" data-refresh-interval="50" data-speed="1750"></span>%</div>
                    </div>
                    <h4 class="nobottommargin" data-animate="bounceIn">Espagnol</h4>
                    <div class="rounded-skill" data-color="#009832" data-size="70" data-percent="95" data-width="3" data-speed="2000">
                        <div class="counter counter-inherit"><span data-from="1" data-to="95" data-refresh-interval="50" data-speed="1750"></span>%</div>
                    </div>
                    <h4 class="nobottommargin" data-animate="bounceIn">Anglais</h4>
                    <div class="rounded-skill" data-color="#9BC631" data-size="70" data-percent="70" data-width="3" data-speed="2000">
                        <div class="counter counter-inherit"><span data-from="1" data-to="70" data-refresh-interval="50" data-speed="1750"></span>%</div>
                    </div>
                </div>
                <div class="col_one_fourth center leftmargin-sm nobottommargin">
                    <div class="fancy-title title-center">
                        <h3>Web</h3>
                        <ul class="skills topmargin">
                            <li data-percent="90" class="bottommargin">
                                <span>HTML5</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="80" class="bottommargin">
                                <span>CSS3</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="80" class="bottommargin">
                                <span>SQL</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="70" class="bottommargin">
                                <span>PHP</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="70" class="bottommargin">
                                <span>JavaScript</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="60" class="bottommargin">
                                <span>jQuery</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col_one_fourth center nobottommargin">
                    <div class="fancy-title title-center">
                        <h3>Langages</h3>
                        <ul class="skills topmargin">
                            <li data-percent="100" class="bottommargin">
                                <span>Bash</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="95" class="bottommargin">
                                <span>Git</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="95" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="85" class="bottommargin">
                                <span>Java</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="60" class="bottommargin">
                                <span>C</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="15" class="bottommargin">
                                <span>C++</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="15" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="1" class="bottommargin">
                                <span>Python</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="1" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col_one_fourth center nobottommargin col_last">
                    <div class="fancy-title title-center">
                        <h3>Logiciels</h3>
                        <ul class="skills topmargin">
                            <li data-percent="100" class="bottommargin">
                                <span>Acrobat</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="90" class="bottommargin">
                                <span>Photoshop</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="80" class="bottommargin">
                                <span>Illustrator</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="80" class="bottommargin">
                                <span>Premiere</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="70" class="bottommargin">
                                <span>After Effects</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                            <li data-percent="70" class="bottommargin">
                                <span>3D Studio Max</span>
                                <div class="progress">
                                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="50" data-speed="1100"></span>%</div></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix common-height col-padding">
                    <div class="divider divider-border divider-center nomargin">
                        <i class="icon-terminal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('view/require/footer.php'); ?>

</body>
</html>
