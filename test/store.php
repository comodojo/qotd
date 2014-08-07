<?php

include('../src/Qotd.php');

$qotd = new \Comodojo\Qotd\Qotd();

echo "Whole archive as a store:\n\n";

echo var_export($qotd->getQuotesAsStore(), true);

echo "\n\n";
