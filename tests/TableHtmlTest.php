<?php

namespace App\Tests;

use App\TableBuilder\Table;
use App\Twig\TableBuilderExtension;
use PHPStan\DependencyInjection\LoaderFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TableHtmlTest extends TestCase
{
    private Environment|null $twigEnv = null;

    public function setUp(): void {
        $loader = new FilesystemLoader('templates');
        $this->twigEnv = new Environment($loader);
    }

    public function testTableCaption(): void
    {
        $object = new TableBuilderExtension();

        $table = new Table('ABcd');
        $table->addColumn('one');

        $html = $object->tableBuilder($this->twigEnv, $table);

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        $this->assertSame('ABcd', $crawler?->filterXPath('//caption')?->getNode(0)?->nodeValue,
            'Tag <caption> not found :(');
        $this->assertStringContainsString('<table>', $html);
        $this->assertTrue(true);
    }
}
