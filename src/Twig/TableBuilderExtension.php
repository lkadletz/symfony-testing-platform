<?php


namespace App\Twig;


use Twig\Environment;
use Twig\Extension\RuntimeExtensionInterface;

class TableBuilderExtension implements RuntimeExtensionInterface {

    public function __construct() {

    }

    /**
     * @param Environment $environment
     * @param array<mixed> $tableArray
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function tableBuilder(Environment $environment, array $tableArray) : string {
        return $environment->render($environment->load('tableBuilder/test.html.twig'), [
            'tableArray' => $tableArray
        ]);
    }
}