<?php
include('./src/Parser.php');
use FileParser\Parser;

$parser = new Parser("./tests/1.txt");
echo $parser->findRegexp('gj');