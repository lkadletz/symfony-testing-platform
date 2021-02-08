<?php


namespace App\Twig;

use http\Env;
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
                [TableBuilderExtension::class, 'one']
            ),
            new TwigFunction('obj',
                [TableBuilderExtension::class, 'obj']
            ),
        ];
    }
}