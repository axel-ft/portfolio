<?php
$title = "Qui suis-je ? - Axel Floquet-Trillot";
$canonical = "https://axelfloquet.fr";
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
                <div class="swiper-slide dark" style="background-image: url('public/images/projets/meeting.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/projets/markerboard.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/projets/diagram.jpeg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/projets/workshop.jpg');"></div>
                <div class="swiper-slide dark" style="background-image: url('public/images/projets/diagrams.jpeg');"></div>
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
                <h1>Projets</h1>
            </div>

        </section><!-- #page-title end -->

</section><!-- #slider end-->

<!-- Content
============================================= -->
<section id="content" style="nobottommargin">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                        <li class="activeFilter"><a href="#" data-filter="*">Tout voir</a></li>
                        <li><a href="#" data-filter=".pf-web">Web</a></li>
                        <li><a href="#" data-filter=".pf-app">Applications</a></li>
                        <li><a href="#" data-filter=".pf-divers">Divers</a></li>

                    </ul><!-- #portfolio-filter end -->

                    <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                        <i class="icon-random"></i>
                    </div>

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-3 clearfix" style="position: relative; height: 1108.5px;">

                        <article class="portfolio-item pf-web">
                            <div class="portfolio-image">
                                <a href="/">
                                    <img src="/public/images/projets/portfolio.png" alt="Portfolio">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/portfolio.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/portfolio" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="/">Portfolio</a></h3>
                                <span><a href="#">Web</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-web">
                            <div class="portfolio-image">
                                <a href="https://github.com/axel-ft/8gag_php">
                                    <img src="/public/images/projets/8gag.png" alt="8GAG">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/8gag.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/8gag_php" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a target="_blank" href="https://github.com/axel-ft/8gag_php">8gag</a></h3>
                                <span><a href="#">Web</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-web">
                            <div class="portfolio-image">
                                <a href="https://github.com/axel-ft/machine_casino">
                                    <img src="/public/images/projets/slotmachine.png" alt="JS Slot Machine">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/slotmachine.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/machine_casino" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="https://github.com/axel-ft/machine_casino" target="_blank">JavaScript Slot Machine</a></h3>
                                <span><a href="#">Web</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-app">
                            <div class="portfolio-image">
                                <a href="https://github.com/axel-ft/chess">
                                    <img src="/public/images/projets/chess.png" alt="Echecs">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/chess.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/chess" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="https://github.com/axel-ft/chess" target="_blank">Échecs console C#</a></h3>
                                <span><a href="#">Applications</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-app">
                            <div class="portfolio-image">
                                <a href="https://github.com/axel-ft/chess">
                                    <img src="/public/images/projets/subtitles.png" alt="Lecteur">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/subtitles.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/subtitles" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="https://github.com/axel-ft/subtitles" target="_blank">Lecteur Vidéo & Sous-titres C#</a></h3>
                                <span><a href="#">Applications</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-divers">
                            <div class="portfolio-image">
                                <a href="https://github.com/axel-ft/vim_vonfig">
                                    <img src="/public/images/projets/vim.png" alt="VIM">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="/public/images/projets/vim.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="https://github.com/axel-ft/vim_config" target="_blank" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="https://github.com/axel-ft/vim_config" target="_blank">Configuration VIM (avec plugins)</a></h3>
                                <span><a href="#">Divers</a></span>
                            </div>
                        </article>

                    </div><!-- #portfolio end -->

                </div>

            </div>

        </section>

<?php require_once('view/require/footer.php'); ?>

</body>
</html>
