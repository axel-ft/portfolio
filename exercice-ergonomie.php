<?php
    $title = "Qui suis-je ? - Axel Floquet-Trillot";
    $canonical = "https://axelfloquet.fr/exo-ergo";
    require_once('view/require/head.php');
?>
</head>

<?php require_once('view/require/header.php'); ?>

<section id="content">
    <div class="content-wrap nopadding">
        <div class="container clearfix">
            <div class="contact-widget">
                <div class="contact-form-result">
                    <form action="" method="post" class="dark">
                        <div class="col_half col_last">
                            <input class="sm-form-control" type="mail" value="" name="" placeholder="Adresse mail">
                        </div>
                        <div class="col_half col_last">
                            <input class="sm-form-control" type="number" value="" name="" placeholder="Age">
                        </div>
                        <div class="col_half col_last">
                            <input class="sm-form-control" type="text" value="" name="" placeholder="Nom">
                        </div>
                        <button type="submit" class="button">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('view/require/footer.php'); ?>
