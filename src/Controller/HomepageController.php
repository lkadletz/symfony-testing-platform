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
                'header' => [
                    ['acko', 'bcko', 'ccko']
                ],
                'body' => [
                    [123, 456, 789, 234, 455, 2],
                    [0, 65, 887, 33, 3, 4666],
                    [23, 45, 77, 437, 876, 876],
                    [23, 45, 77, 201, 356, 756],
                    [23, 45, 77, 832, 832, 2]
                ],
                'footer' => [
                    ['footer']
                ]
            ]
        ]);
    }

}