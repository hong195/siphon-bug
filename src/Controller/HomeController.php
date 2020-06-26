<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $words = ['sky', 'cloud', 'wood', 'rock', 'forest',
            'mountain', 'breeze'];

        return $this->render('index.html.twig', [
            'words' => $words
        ]);
    }
}