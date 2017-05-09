<?php

namespace FarmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FarmBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{

    public function load(ObjectManager $em)
    {
        $categories = ["Fruit", "Légume", "Viande", "Fromage", "Epice", "Boisson"];
        foreach ($categories as $category) {
            $categoryObj = new Category();
            $categoryObj->setName($category);
            $em->persist($categoryObj);
        }
        $em->flush();
    }
}
