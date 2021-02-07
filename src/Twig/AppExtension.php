<?php


namespace App\Twig;

use http\Env;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension {

    public function getFunctions() : array{

        // in test mode load without runtime
        if($_ENV['APP_DEBUG'] === '1') {
            return [
                new TwigFunction('tableBuilder',
                    [new TableBuilderExtension(), 'tableBuilder'],
                    [
                        'needs_environment' => true,
                        'is_safe' => ['html']
                    ]),
                new TwigFunction('one',
                    [new TableBuilderExtension(), 'one']
                ),
                new TwigFunction('one2',
                    [$this, 'one2']),
            ];
        } else {
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
                new TwigFunction('one2',
                    [$this, 'one2']),
            ];
        }


        return [

        ];
    }

    public function one2(int $number) {
        return $number + 2;
    }
}