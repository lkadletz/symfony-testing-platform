<?php


namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension {

    public function getFunctions() : array{
        return [
            new TwigFunction('tableBuilder',
                [TableBuilderExtension::class, 'tableBuilder'],
                [
                    'needs_environment' => true,
                    'is_safe' => ['html']
                ]),
            new TwigFunction('one',
                [TableBuilderExtension::class, 'one']),
            new TwigFunction('one2',
                [$this, 'one2']),
        ];
    }

    public function one2(int $number) {
        return $number + 2;
    }
}