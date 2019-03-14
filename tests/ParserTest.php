<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use FileParser\Parser;

class ParserTest extends TestCase
{

    public function testReadFileFromStorage()
    {
        $class = new Parser("./tests/1.txt");
        $this->assertEquals('Найдено вхождение(gj) на позиции 1 в строке :1', $class->findRegexp('gj'));
    }
}

