<?php
declare(strict_types=1);

class Song extends Thread 
{
    private $lyric;
    private $times;

    public function __construct(string $line, int $repetitions) 
    {
        $this->lyric = $line;
        $this->times = $repetitions;
    }

    public function run() 
    {
        for ($i=0; $i<$this->times; ++$i) {
            echo $this->lyric."\r\n";
            sleep(2);
        }
    }
}

echo "Anything you can do, I can do better!\r\n";
echo "\t\t\t\t\tI can do anything better than you.\r\n";

$s1 = new Song('Yes I can!', 30);
$s2 = new Song("\t\t\t\t\tNo you can't!", 20);

$s1->start();
$s2->start();
