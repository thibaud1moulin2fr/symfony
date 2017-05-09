<?php
/**
 * Created by PhpStorm.
 * User: tmoulin2016
 * Date: 27/04/2017
 * Time: 14:09
 */

namespace Controller;

class Router
{

    public function execute($page)
    {
        //en fonction de la page, on exécute différents codes...

        switch ($page) {

            case "accueil":
                $controller = new \Controller\PageController();
                $controller->home();
                break;

            case "termes":
                $controller = new \Controller\PageController();
                $controller->all();
                break;

            case "detail":
                $id = $_GET['term'];
                $controller = new \Controller\PageController();

                if (empty($id)) {
                    $controller->pageNotFound();
                } else {
                    $controller->detail($id);
                }
                break;

            case "faq":
                $controller = new \Controller\PageController();
                $controller->faq();
                break;
            default :
                $controller = new \Controller\PageController();
                $controller->pageNotFound();
                break;
        }
    }
}