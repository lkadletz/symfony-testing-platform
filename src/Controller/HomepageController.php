<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController {

    #[Route(path: '/', name: 'homepage')]
    public function homepage(): Response {
        return $this->render('homepage/homepage.html.twig', [
            'content' => true,
            'table' => [
                ['acko', 'bcko', 'ccko'],
                [123, 456, 789],
                [0, 65, 887],
                [23, 45, 77]
            ]
        ]);
    }

}