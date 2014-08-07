<?php

include('../src/Qotd.php');

$qotd = new \Comodojo\Qotd\Qotd();

echo "\nSingle, random quote:\n\n";

echo $qotd->getQuote();

echo "\n\n";
