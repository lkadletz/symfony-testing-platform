<?php


namespace App\Twig;


use App\TableBuilder\Table;
use Twig\Environment;
use Twig\Extension\RuntimeExtensionInterface;

class TableBuilderExtension implements RuntimeExtensionInterface {

    /**
     * @param Environment $environment
     * @param array<mixed> $tableArray
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function tableBuilder(Environment $environment, Table $table) : string {

        return $environment->render($environment->load('tableBuilder/layout.html.twig'), [
            'table' => $table
        ]);
    }

    public function one(int $number): int {
        return $number + 1;
    }

    public function obj(\DateTime $dateTime) {
        return $dateTime->format('Y');
    }
}