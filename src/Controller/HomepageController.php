<?php

namespace App\Controller;

use App\TableBuilder\Table;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController {

    #[Route(path: '/', name: 'homepage')]
    public function homepage(): Response {

        $table = new Table('Table');

        // cols
        for($i = 0; $i < 20; $i++) {
            $table->addColumn('col' . $i);
        }

        // rows
        for($i = 0; $i < 300; $i++) {
            $row = $table->addRow(1);
            for($j = 0; $j < 20; $j++) {
                $row->addCell('cell-' . $i . '-' . $j);
            }
        }

        // footer
        for($i = 0; $i < 10; $i++) {
            $row = $table->addFooterRow();
            for($j = 0; $j < 20; $j++) {
                $row->addCell('foot-' . $i . '-' . $j);
            }
        }

        return $this->render('homepage/homepage.html.twig', [
            'content' => true,
            'table' => $table
        ]);
    }

}