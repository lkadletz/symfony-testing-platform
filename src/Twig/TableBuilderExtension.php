<?php


namespace App\Twig;


use Twig\Extension\RuntimeExtensionInterface;

class TableBuilderExtension implements RuntimeExtensionInterface {

    public function __construct() {

    }

    public function tableBuilder(int $number) : int {
        return $number + 10;
    }
}