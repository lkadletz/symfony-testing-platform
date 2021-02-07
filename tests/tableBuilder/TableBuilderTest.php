<?php


namespace App\Tests\tableBuilder;


use App\Twig\AppExtension;
use Twig\Test\IntegrationTestCase;

class TableBuilderTest extends IntegrationTestCase {

    public function getExtensions() : array {
        return [
            new AppExtension()
        ];
    }

    public function getFixturesDir() : string {
        return __DIR__ . '/Fixtures/';
    }


}