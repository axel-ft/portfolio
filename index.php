<?php
session_start();

require_once('router/Router.class.php');
require_once('router/Route.class.php');
require_once('router/RouterException.class.php');


$router = new Router($_GET['url']);
$router->get('/', function () {
    require_once 'view/index.php';
});
$router->get('/parcours-personnel', function () {
    require_once 'view/parcours-personnel.php';
});
$router->get('/parcours-professionnel', function () {
    require_once 'view/parcours-professionnel.php';
});
$router->get('/projets', function () {
    require_once 'view/projets.php';
});
$router->get('/contact', function () {
    require_once "view/contact.php";
});
$router->get('/CV', function () {
    $file = 'public/files/CV_Axel_Floquet-Trillot.pdf';
    $filaname = 'CV_Axel_Floquet-Trillot.pdf';

    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($file));
    header('Accept-Ranges: bytes');

    @readfile($file);
});
$router->run();

