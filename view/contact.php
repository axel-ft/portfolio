<?php
$title = "Me contacter - Axel Floquet-Trillot";
$canonical = "https://axelfloquet.fr/contact";
require_once('view/require/head.php');
?>
<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<?php require_once('view/require/header.php'); ?>

<section style="background:url('/public/images/contact.jpg') 0 20%; background-size:cover" class="slider-parallax" id="slider" data-height-lg="450" data-height-md="400" data-height-sm="300" data-height-xs="200" data-height-xxs="200">
    <!-- Page title
    ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1>Contact</h1>
        </div>
    </section>
    <!-- #page-title end -->
</section>

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin">
                <h3>Envoyez-moi un e-mail</h3>
                <div class="contact-widget">
                    <div class="contact-form-result"></div>

                    <form action="" method="post" class="nobottommargin" id="template-contactform">

                        <div class="form-process"></div>
                        <div class="col_half">
                            <label for="nom">
                                Nom <small>*</small>
                            </label>
                            <input type="text" class="sm-form-control required" name="nom" id="nom">
                        </div>

                        <div class="col_half col_last">
                            <label for="prenom">
                                Prénom <small>*</small>
                            </label>
                            <input type="text" class="sm-form-control required" name="prenom" id="prenom">
                        </div>

                        <div class="col_half">
                            <label for="mail">
                                Email <small>*</small>
                            </label>
                            <input type="mail" class="sm-form-control required email" name="mail" id="mail">
                        </div>

                        <div class="col_half col_last">
                            <label for="phone">
                                Téléphone
                            </label>
                            <input type="text" class="sm-form-control" name="phone" id="phone">
                        </div>

                        <div class="col_full">
                            <label for="sujet">
                                Sujet <small> *</small>
                            </label>
                            <input type="text" class="sm-form-control required" name="sujet" id="sujet">
                        </div>

                        <div class="col_full">
                            <label for="message">
                                Message <small> *</small>
                            </label>
                            <textarea class="sm-form-control required" name="message" id="message" col="6" rows="10"></textarea>
                        </div>

                        <div class="col_full">
                            <div class="g-recaptcha" data-theme="dark" data-sitekey="6LeqWh0UAAAAAHd3A7_mjD-aiVATw_nteFKcG-Vi"></div>
                        </div>

                        <div class="col_full">
                            <button class="button nomargin" type="submit">Envoyer</button>
                        </div>

                    </form>

                </div>
            </div>
            <!-- #postcontent end-->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar col_last nobottommargin">
                <h4>Mes coordonnées</h4>
                <strong>Email : </strong><a href="mailto:axelfloquettrillot@ynov.com">axel.floquettrillot@ynov.com</a><br>
                <strong>Téléphone : </strong>06 19 64 09 77<br>

                <div class="row clearfix common-height topmargin-sm bottommargin-sm">
                    <div class="divider divider-border divider-center nomargin">
                        <i class="icon-terminal"></i>
                    </div>
                </div>

                <h4>Impression 3D</h4>
                <div class="center" style="margin-bottom: 10px;">
                    <a class="bottommargin-sm" href="https://www.3dhubs.com/service/axelft" data-3dhubs-widget="button" data-hub-id="178685" data-type="orderWidget" data-color="red" data-size="small" data-text="Commander vos pièces 3D">Commandez vos pièces 3D</a>
                    <script>
                        !function(a,b,c,d){var e,g=(a.getElementsByTagName(b)
                        [0],/^http:/.test(a.location)?"http":"https");a.getElementById(d)||
                        (e=a.createElement(b), e.id=d, e.src=g+"://d3d4ig4df637nj.cloudfront.net/w/2.0.js", e.async=!0,a.body.appendChild
                        (e))}(document,"script",1,"h3d-widget-js");
                    </script>
                </div>
                <div class="center">
                    <a href="https://www.3dhubs.com/service/axelft" data-3dhubs-widget="button" data-hub-id="178685" data-type="hubLink" data-color="green" data-size="small" data-text="Mon hub 3D Hubs">Mon hub sur 3D Hubs</a>
                    <script>
                        !function(a,b,c,d){var e,g=(a.getElementsByTagName(b)
                        [0],/^http:/.test(a.location)?"http":"https");a.getElementById(d)||
                        (e=a.createElement(b), e.id=d, e.src=g+"://d3d4ig4df637nj.cloudfront.net/w/2.0.js", e.async=!0,a.body.appendChild
                        (e))}(document,"script",1,"h3d-widget-js");
                    </script>
                </div>

                <div class="row clearfix common-height topmargin-sm bottommargin-sm">
                    <div class="divider divider-border divider-center nomargin">
                        <i class="icon-terminal"></i>
                    </div>
                </div>

                <h4>Liens</h4>
                <div class="center clearfix">
                    <a target="_blank" href="https://www.facebook.com/axel.ft" class="social-icon si-rounded si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a target="_blank" href="https://www.linkedin.com/in/axel-floquet-trillot-79b605108" class="social-icon si-rounded si-small si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a target="_blank" href="https://github.com/axel-ft" class="social-icon si-rounded si-small si-borderless si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a target="_blank" href="https://bitbucket.org/axelft" class="social-icon si-rounded si-small si-borderless si-bitbucket">
                        <i class="icon-bitbucket"></i>
                        <i class="icon-bitbucket"></i>
                    </a>

                    <a target="_blank" href="https://www.3dhubs.com/service/axelft" class="social-icon si-rounded si-small si-borderless si-3dhubs">
                        <i class="icon-3dhubs">
                            <svg version="1.1" id="3dhubs"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xlmns:xlink="http://w3.org/1999/xlink"
                                 x="0px" y="0px" viewbox="0 0 32 32" style="enable-background: new 0 0 32 32;" xml:space="preserve">
                                <style type="text/css">.bgd{fill:#DDDDDD;stroke:none;stroke-miterlimit:10;}</style>
                                <polygon class="bgd" points="19.7,7 26.2,10.8 26.2,18.8 16.1,25 5.8,18.6 5.8,11.1 12.5,7 16.1,9.2 "/>
                            </svg>
                        </i>
                        <i class="icon-3dhubs" style="position:relative; top:-9px;">
                            <svg version="1.1" id="3dhubs"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xlmns:xlink="http://w3.org/1999/xlink"
                                 x="0px" y="0px" viewbox="0 0 32 32" style="enable-background: new 0 0 32 32;" xml:space="preserve">
                                <style type="text/css">.bw{fill:#FFFFFF;stroke:none;stroke-miterlimit:10;}</style>
                                <polygon class="bw" points="19.7,7 26.2,10.8 26.2,18.8 16.1,25 5.8,18.6 5.8,11.1 12.5,7 16.1,9.2 "/>
                            </svg>
                        </i>
                    </a>

                    <a target="_blank" href="https://paypal.me/axelft" class="social-icon si-rounded si-small si-borderless si-paypal">
                        <i class="icon-paypal"></i>
                        <i class="icon-paypal"></i>
                    </a>
                </div>
            </div><!-- .sidebar end -->

        </div>
    </div>
</section>

<?php require_once('view/require/footer.php'); ?>
</body>
</html>
