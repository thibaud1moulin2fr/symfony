<?php
/**
 * Created by PhpStorm.
 * User: tmoulin2016
 * Date: 27/04/2017
 * Time: 12:14
 */

namespace Controller;

class Controller
{

    /**
     * Error 404
     */
    public function pageNotFound()
    {
        header('HTTP:/1.0 404 Not Found');
        $this->render('error404.html.twig');
    }

    protected function render($template, array $data = [])
    {
        $loader = new \Twig_Loader_Filesystem('View/templates');
        $twig = new \Twig_Environment($loader, array(
            'cache' => 'View/cache',
            'debug' => true
        ));

        echo $twig->render($template, $data);
    }
}