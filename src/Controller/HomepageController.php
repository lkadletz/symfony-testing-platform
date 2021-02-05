<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController {

    #[Route(path: '/a', name: 'homepage')]
    public function homepage(): Response {
        return $this->render('templates/homepage.html.twig', [
            'content' => true
        ]);
    }

}