<?php

namespace App\Tests;

use App\TableBuilder\Column;
use PHPUnit\Framework\TestCase;

class ColumnTest extends TestCase
{
    public function testInit(): void
    {
        $column = new Column('col');
        $this->assertIsObject($column);
    }
}
