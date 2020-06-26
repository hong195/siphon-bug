<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{

    /**
     * @Route("/add-post", name="add_post")
     */
    public function add_post(){
        return $this->render('add_post.html.twig');
    }

    /**
     * @Route("/add-post/request", name="add_post_request")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function request(){
        return $this->json(['response' => $_POST]);
    }
}