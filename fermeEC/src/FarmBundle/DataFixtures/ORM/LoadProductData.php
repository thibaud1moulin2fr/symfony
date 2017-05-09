<?php

namespace FarmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FarmBundle\Entity\Product;

class LoadProductData implements FixtureInterface
{

    public function load(ObjectManager $em)
    {

        $categoryRepo = $em->getRepository('FarmBundle:Category');
        $categories = $categoryRepo->findAll();
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 200; $i++) {

            $product = new Product();
            $product->setName($faker->word);
            $product->setPrice($faker->randomFloat(2, 0, 5));
            $product->setDescription($faker->realText(255));
            $product->setQuantity($faker->randomNumber(4));
            $product->setDateCreation($faker->dateTimeBetween('-2 years'));
            $product->setIsActive($faker->boolean(91));
            $product->setCategory($faker->randomElement($categories));

            $em->persist($product);
        }
        $em->flush();
    }
}