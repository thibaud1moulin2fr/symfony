<?php
//on démarre la session, peu importe la page
session_start();

//charge nos classes automatiquement
include("vendor/autoload.php");
//cette fonction est appelée par PHP, en nous passant le nom de la classe qu'il cherche
//c'est notre dernière chance de faire l'include
spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    include($className . ".php");
});

include("config.php");

//on récupère la page à afficher dans l'URL
//si le paramètre page n'est pas présent dans l'URL, on dit que c'est la home
$page = (empty($_GET['page'])) ? 'accueil' : $_GET['page'];

$router = new Controller\Router();
$router->execute($page);
