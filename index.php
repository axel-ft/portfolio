<?php require_once('head.php'); ?>
<body>
    <?php require_once('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row">
            <div id="img-header" class="flex"><img src="img/presentation/profil.jpg" alt="" class="img-responsive img-circle center-block" id="img-profile"></div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <h2>Bienvenue !</h2>
            <p> Je m'appelle Axel Floquet-Trillot, j'ai 22 ans, et je suis aujourd'hui étudiant en informatique en première année à Ingésup sur le campus d'Ynov Paris.</p>
            <p><a class="btn btn-primary btn-lg" href="#qui" role="button">Qui suis-je ?</a> <a class="btn btn-primary btn-lg" href="#competences" role="button">Mes compétences</a></p>
        </div>
    </div>
    <div class="container text-justify">
        <div class="row">
            <div class="col-md-12" id="qui">
                <h2 class="text-center">Qui suis-je ?</h2> </div>
        </div>
        <div class="row flex flex-row">
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p> J'ai obtenu mon bac Scientifique en 2012, après mes études secondaires au Lycée Hoche de Versailles. Je suis entré en PACES (Première Année Commune aux Etudes de Santé) en 2012 dans le but initial de faire médecine.</p>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img src="img/presentation/lycee_hoche.JPG" alt="" class="img-responsive"> </div>
        </div>
        <div class="row flex flex-row flex-row-reverse">
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img src="img/presentation/medical.jpg" alt="" class="img-responsive"> </div>
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p>Comme une majorité d'étudiants, j'ai d'abord redoublé la PACES avant d'être reçu-collé au concours (ma moyenne était supérieure à 10 mais mon classement, à quelques places près, ne me permettait pas d'entrer dans une des filières de santé). </p>
            </div>
        </div>
        <div class="row flex flex-row">
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p> J'ai obtenu une équivalence pour entrer en L2 Sciences pour la Santé. J'ai donc poursuivi mes études pendant 2 ans jusqu'à obtention du diplôme de la Licence Sciences et Technologies - Mention Sciences pour la Santé en 2016. Pendant ces deux ans, j'ai surtout étudié la biologie (bactériologie, immunologie, hématologie, virologie, neurologie, etc), la biochimie (métabolisme, etc), et la physiologie (fonctionnement du corps humain sans pathologie). </p>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img src="img/presentation/science-eprouvette.jpg" alt="" class="img-responsive"> </div>
        </div>
        <div class="row flex flex-row flex-row-reverse">
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img src="img/presentation/photo_gala_aps.jpg" alt="" class="img-responsive"></div>
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p> Pendant ces deux années de licence, j'ai pris le temps de construire un nouveau projet professionnel, que j'avais d'abord axé sur la neurologie. L'élément qui a déclenché ma réorientation en informatique est mon entrée dans l'Amicale Paris Sciences (l'APS, le BDE de la licence), dans lequel j'ai exercé un mandat en tant que Vice-Président chargé de la Communication.</p>
            </div>
        </div>
        <div class="row flex flex-row">
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p>Pendant ce mandat, j'ai du reconcevoir le site de l'APS, qui n'avait pas été mis à jour depuis plusieurs années. C'est en démarrant ce projet que j'ai appris le PHP, SQL, HTML et CSS. Le site est dynamique et basé sur Joomla!. Il est accessible via <a href="http://aps-paris5.fr" target="_blank" title="Mon premier site créé">ce lien</a> ou directement par le menu, dans la catégorie Fichiers / Liens.</p>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img src="img/presentation/site_aps.png" alt="" class="img-responsive"> </div>
        </div>
        <div class="row flex flex-row flex-row-reverse">
            <div class="col-sm-4 col-md-3 col-lg-5 flex"> <img class="img-responsive" alt="" src="img/presentation/OpenClassrooms_Homepage.png"> </div>
            <div class="col-sm-8 col-md-9 col-lg-7 flex">
                <p>C'est après avoir codé ce site, et après avoir passé beaucoup de temps sur OpenClassrooms (avec des cours sur plusieurs langages) que je me suis décidé à entrer en première année d'Ingésup, en ingéniérie informatique.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-justify competences wrapper">
        <div class="row">
            <div class="col-md-12" id="competences">
                <h2 class="text-center">Mes compétences</h2> </div>
        </div>
        <div class="col-md-12">
            <hr>
            <h3 class="text-center">Langues</h3> </div>
        <div class="row text-center">
            <div class="col-xs-4 col-sm-2 col-sm-offset-3">
                <div id="fr" class="pgrbar center-block"></div>
                <p>Français</p>
            </div>
            <div class="col-xs-4 col-sm-2">
                <div id="esp" class="pgrbar center-block"></div>
                <p>Espagnol</p>
            </div>
            <div class="col-xs-4 col-sm-2">
                <div id="eng" class="pgrbar center-block"></div>
                <p>Anglais</p>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <h3 class="text-center">Langages Web</h3> </div>
        <div class="row text-center">
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="html5" class="pgrbar center-block"></div>
                <p>HTML5</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="css3" class="pgrbar center-block"></div>
                <p>CSS3</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="js" class="pgrbar center-block"></div>
                <p>JavaScript</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="jquery" class="pgrbar center-block"></div>
                <p>JQuery</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="sql" class="pgrbar center-block"></div>
                <p>SQL</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="php" class="pgrbar center-block"></div>
                <p>PHP</p>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <h3 class="text-center">Programmation</h3> </div>
        <div class="row text-center">
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="bash" class="pgrbar center-block"></div>
                <p>Bash</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="c" class="pgrbar center-block"></div>
                <p>C</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="cpp" class="pgrbar center-block"></div>
                <p>C++</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="java" class="pgrbar center-block"></div>
                <p>Java</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="python" class="pgrbar center-block"></div>
                <p>Python</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="git" class="pgrbar center-block"></div>
                <p>Git</p>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <h3 class="text-center">Logiciels</h3> </div>
        <div class="row text-center">
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="acrodc" class="pgrbar center-block"></div>
                <p>Acrobat</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="photoshop" class="pgrbar center-block"></div>
                <p>Photoshop</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="illustrator" class="pgrbar center-block"></div>
                <p>Illustrator</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="premiere" class="pgrbar center-block"></div>
                <p>Premiere</p>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-2">
                <div id="ae" class="pgrbar center-block"></div>
                <p>AfterEffects</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
                <div id="studiomax" class="pgrbar center-block"></div>
                <p>3ds Max</p>
            </div>
        </div>
    </div>
    <!-- DEBUT footer -->
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-left">
                <p>© Copyright 2016 Axel Floquet-Trillot</p>
            </div>
            <div class="navbar-right flex flex-row">
                <a href="contact.html"><img alt="Contact" src="img/close-envelope.svg" class="img-responsive" width="32"></a>
                <a href="https://www.facebook.com/axelft" target="_blank"><img src="img/facebook.svg" alt="Facebook" class="img-responsive img-circle" width="32"></a>
                <a href="https://www.linkedin.com/in/axel-floquet-trillot-79b605108" target="_blank"><img src="img/linkedin.svg" alt="LinkedIn" class="img-responsive" width="32"></a>
                <a href="https://www.3dhubs.com/paris/hubs/axel-0" target="_blank"><img src="img/3D-Hubs-logo.png" class="img-responsive img-circle" width="32" alt="3DHubs"></a>
                <a href="https://bitbucket.org/axelft/" target="_blank"><img src="img/bitbucket.svg" alt="BitBucket" width="32" class="img-responsive img-circle"></a>
            </div>
        </div>
    </footer>
    <!-- FIN footer -->
    <!-- JQUERY ET BOOTSRAP JS-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/hovermenu.js"></script>
    <script type="text/javascript" src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
    <script src="js/competences.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- FIN JS -->
</body>

</html>
