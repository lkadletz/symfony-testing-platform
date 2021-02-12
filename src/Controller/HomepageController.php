<?php

namespace App\Controller;

use App\TableBuilder\Table;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController {

    #[Route(path: '/', name: 'homepage')]
    public function homepage(Request $request): Response {

        $form = $this->createFormBuilder();
        $form->add('rows', IntegerType::class, [
            'attr' => ['min' => 1, 'max' => 999]
        ]);
        $form->add('cols', IntegerType::class, [
            'attr' => ['min' => 1, 'max' => 99]
        ]);
        $form->add('odeslat', SubmitType::class, ['label' => 'Odeslat']);

        $form = $form->getForm();

        $form->handleRequest($request);

        $rows = 1;
        $cols = 1;

        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $rows = (int) $data['rows'];
            $cols = (int) $data['cols'];
        }

        $table = new Table('Table');

        // cols
        for($i = 0; $i < $cols; $i++) {
            $table->addColumn('col' . $i);
        }

        // rows
        for($i = 0; $i < $rows; $i++) {
            $row = $table->addRow(1);
            for($j = 0; $j < $cols; $j++) {
                $row->addCell('cell-' . $i . '-' . $j);
            }
        }

        // footer
        for($i = 0; $i < 1; $i++) {
            $row = $table->addFooterRow();
            for($j = 0; $j < $cols; $j++) {
                $row->addCell('foot-' . $i . '-' . $j);
            }
        }

        return $this->render('homepage/homepage.html.twig', [
            'content' => true,
            'table' => $table,
            'form' => $form->createView()
        ]);
    }

}