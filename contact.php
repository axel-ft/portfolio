<?php
    $title = "Me contacter - Axel Floquet-Trillot";
    require_once('head.php');
?>
<body>
<?php require_once('navbar.php'); ?>
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="text-justify">Vous pouvez me contacter pour toute question via le formulaire ci-dessous ou directement à mon adresse mail :
                    <script>
                        genererAdresse();
                    </script>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="#" method="get" class="form-horizontal" id="form-contact">
                    <div class="form-group">
                        <label for="prenom" class="col-sm-2 control-label">Prénom</label>
                        <div class="col-sm-4">
                            <input type="text" name="prenom" id="prenom" class="form-control" required title="Entrez votre prénom" placeholder="Jean" pattern="[a-zA-Z àáâãäåÀÁÂèéêëÈÉÊËìíîïÌÍÎÏòóôõöøÒÓÔÕÖØùúûüÙÚÛÜÿçÇñÑ]{1,}"> </div>
                        <label for="nom" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-4">
                            <input type="text" name="nom" id="nom" class="form-control" required title="Entrez votre nom de famille" placeholder="Dupont" pattern="[a-zA-Z àáâãäåÀÁÂèéêëÈÉÊËìíîïÌÍÎÏòóôõöøÒÓÔÕÖØùúûüÙÚÛÜÿçÇñÑ]{1,}"> </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-4">
                            <input type="email" name="email" id="email" class="form-control" required title="Entrez votre adresse mail" placeholder="adresse@exemple.com"> </div>
                        <label for="tel" class="col-sm-2 control-label">Téléphone</label>
                        <div class="col-sm-4">
                            <input type="tel" name="tel" id="tel" class="form-control" required title="Entrez votre numéro de téléphone" placeholder="0XXXXXXXXX" pattern="[0][12345679][0-9]{8}" maxlength="10"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Votre message..." required></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id="envoyer" class="btn btn-default">Envoyer !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
