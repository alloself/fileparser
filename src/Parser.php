<?php
namespace FileParser;

class Parser
{
    protected $path = '';
    protected $count = 0;
    protected $file;

    public function __construct($path)
    {
        $this->path = $path;
        $this->file = fopen($this->path, 'r');
    }
    protected function readFileFromStorage()
    {
        while (!feof($this->file)) {
            $row = fgets($this->file);
            $this->count++;
            yield $row;
        }

        return;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function findRegexp(String $regular)
    {
        foreach ($this->readFileFromStorage() as $line) {
            if ($pos = strpos($line, $regular)) {
                return 'Найдено вхождение(' . $regular . ') на позиции ' . $pos . ' в строке :' . $this->getCount();
            }
        }
    }
}
