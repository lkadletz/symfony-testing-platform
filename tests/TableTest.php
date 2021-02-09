<?php

namespace App\Tests;

use App\TableBuilder\Table;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testName(): void
    {
        $table = new Table('tableName');

        $this->assertIsObject($table);
        $this->assertSame('tableName', $table->getName());
        $table->setName('tableName2');
        $this->assertSame('tableName2', $table->getName());
    }
}
