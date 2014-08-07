<?php

include('../src/Qotd.php');

$qotd = new \Comodojo\Qotd\Qotd();

echo "Whole archive in array:\n\n";

echo var_export($qotd->getQuotes(), true);

echo "\n\n";
