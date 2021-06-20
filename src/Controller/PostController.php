<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController Home',
            'entete' => 'home-bg.jpg',
        ]);
    }

    /**
     * @Route("/post/{id}", name="post_view", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function view($id): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController View',
            'entete' => 'post-bg.jpg',
        ]);
    }
}
