<?php

namespace Controller;

/**
 * Gère l'affichage des pages statiques et ennuyantes du site
 */
class PageController extends Controller
{
    /**
     * Page d'accueil
     */
    public function home()
    {
        $termManager = new \Model\TermManager();
        $randTerm = $termManager->findOneByRandom();
        $this->render('home.html.twig', ['term' => $randTerm]);
    }

    /**
     * Page liste tout termes avec filtre
     */
    public function all()
    {
        $termManager = new \Model\TermManager();
        $terms = $termManager->getAllTerms();
        $this->render('all.html.twig', ['allTerms' => $terms]);
    }

    /**
     * Page du détail de l'expression
     */
    public function detail($id)
    {
        $termManager = new \Model\TermManager();
        $term = $termManager->findOneById($id);
        if (empty($term)) {
            $this->pageNotFound();
        } else {
            $this->render('detail.html.twig', ['term' => $term]);
        }
    }

    /**
     * $_SERVER['REMOTE_ADDR']
     */
    public function vote()
    {

    }

    /**
     * Foire aux questions
     */
    public function faq()
    {
        $this->render('faq.html.twig');
    }

}