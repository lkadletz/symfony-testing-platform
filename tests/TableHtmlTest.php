<?php

namespace App\Tests;

use App\TableBuilder\Table;
use App\Twig\TableBuilderExtension;
use PHPStan\DependencyInjection\LoaderFactory;
use PHPUnit\Framework\TestCase;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TableHtmlTest extends TestCase
{
    private Environment|null $twigEnv = null;

    public function setUp(): void {
        $loader = new FilesystemLoader('templates');
        $this->twigEnv = new Environment($loader, [
            'cache' => 'var/cache',
        ]);
    }

    public function testTableGenerator(): void
    {
        $object = new TableBuilderExtension();

        $table = new Table('Table');
        $table->addColumn('one');

        $html = $object->tableBuilder($this->twigEnv, $table);

        $this->assertStringContainsString('<table>', $html);
        $this->assertTrue(true);
    }
}
