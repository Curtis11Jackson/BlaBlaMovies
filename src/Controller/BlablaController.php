<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlablaController extends AbstractController
{
    /**
     * @Route("/blabla", name="blabla")
     */
    public function index()
    {
        return $this->render('blabla/index.html.twig', [
            'controller_name' => 'BlablaController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blabla/home.html.twig');
    }
}
