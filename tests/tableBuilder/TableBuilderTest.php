<?php


namespace App\Tests\tableBuilder;

use App\Twig\AppExtension;
use App\Twig\TableBuilderExtension;
use App\Twig\TableBuilderRuntime;
use Prophecy\Argument;
use Twig\RuntimeLoader\ContainerRuntimeLoader;
use Twig\RuntimeLoader\FactoryRuntimeLoader;
use Twig\Test\IntegrationTestCase;
use Twig\TwigFunction;

class TableBuilderTest extends IntegrationTestCase {

    public function getExtensions() : array {
        return [
            new AppExtension()
        ];
    }

    public function getFixturesDir() : string {
        return __DIR__ . '/Fixtures/';
    }


    public function getRuntimeLoaders() {
        return [
            new FactoryRuntimeLoader([
                TableBuilderExtension::class => function (): TableBuilderExtension {
                    return new TableBuilderExtension();
                }
            ])
        ];
    }



}