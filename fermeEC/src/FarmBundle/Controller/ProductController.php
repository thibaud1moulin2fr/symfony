<?php

namespace FarmBundle\Controller;

use FarmBundle\Entity\Image;
use FarmBundle\Entity\Product;
use FarmBundle\Form\ImageType;
use FarmBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function addAction(Request $request)
    {
        $product = new Product();
        $product->setDateCreation(new \DateTime());
        $productForm = $this->createForm(ProductType::class, $product);
        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $this->addFlash('success', 'Votre produit a bien été enregistré.');
            return $this->redirectToRoute('addImage', ['productId' => $product->getId()]);
        }

        return $this->render('FarmBundle:Product:add.html.twig', ['productForm' => $productForm->createView()]);
    }

    public function getAllAction()
    {

        $productRepository = $this->getDoctrine()->getRepository('FarmBundle:Product');
        $productsFromDB = $productRepository->findAll();

        return $this->render('FarmBundle:Product:getAll.html.twig', ['products' => $productsFromDB]);
    }

    public function getByIdAction($id)
    {

        $productRepository = $this->getDoctrine()->getRepository('FarmBundle:Product');
        $productFromDB = $productRepository->find($id);

        return $this->render('FarmBundle:Product:getById.html.twig', ['product' => $productFromDB]);
    }

    public function addImageAction($productId)
    {

        $productRepository = $this->getDoctrine()->getRepository('FarmBundle:Product');
        $product = $productRepository->find($productId);
        $image = new Image();
        $image->setProduct($product);
        $imageForm = $this->createForm(ImageType::class, $image);

        if ($imageForm->isSubmitted() && $imageForm->isValid()) {

            $fileName = uniqid() . "." . $image->getFile()->guessExtension();
            $image->setFilename($fileName);
            $uploadDir = $this->getParameter("upload_dir");
            $image->getFile()->move($uploadDir, $fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();

            $this->addFlash('success', "L'image " . $image->getTitle() . " a bien été enregistrée.");
            return $this->redirectToRoute('addImage', ['productId' => $productId]);
        }
        return $this->render("FarmBundle:Product:addImage.html.twig", ["imageForm" => $imageForm->createView()]);
    }
}
