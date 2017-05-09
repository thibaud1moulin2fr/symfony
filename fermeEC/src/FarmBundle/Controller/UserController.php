<?php

namespace FarmBundle\Controller;

use FarmBundle\Entity\User;
use FarmBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function registerAction(Request $request)
    {
        //$userRepository = $this->getDoctrine()->getRepository("FarmBundle:User");
        $user = new User();
        $user->setIsActive(true);
        $user->setDateCreated(new \DateTime());
        $userForm = $this->createForm(UserType::class, $user);

        $userForm->handleRequest($request);

        if ($userForm->isSubmitted() && $userForm->isValid()) {

            $encoder = $this->container->get("security.password_encoder");
            $encoder = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoder);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Votre compte a été créé avec succès.');
            return $this->redirectToRoute('home');
        }
        return $this->render("FarmBundle:User:register.html.twig", ["userForm" => $userForm->createView()]);
    }

    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('FarmBundle:User:login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
}
