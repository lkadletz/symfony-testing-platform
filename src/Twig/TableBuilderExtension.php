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
        return $environment->render($environment->load('tableBuilder/layout.html.twig'), [
            'thead' => $tableArray['header'] ?? [],
            'tbody' => $tableArray['body'] ?? [],
            'tfoot' => $tableArray['footer'] ?? []
        ]);
    }

    public function one(int $number): int {
        return $number + 1;
    }
}