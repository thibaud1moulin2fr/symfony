<?php

namespace FarmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{

    public function getAll()
    {

        $categoryRepository = $this->getDoctrine()->getRepository('FarmBundle:Category');
        $categories = $categoryRepository->findAll();

        return $categories;
    }
}
