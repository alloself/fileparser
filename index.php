<?php
require './vendor/autoload.php';

use FileParser\Parser;
use Tests\ParserTest;

$parser = new Parser("./tests/1.txt");
echo $parser->findRegexp('gj');
$test = new ParserTest();
$test->testReadFileFromStorage();
