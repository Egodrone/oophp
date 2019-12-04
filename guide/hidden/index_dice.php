<?php
$object = new \Eddie\Dice\Dice();
/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

echo "<h1>Rolling dice six times</h1>";
//echo $object->details();
//print_r($object->details());
$object = $object->details();
echo "Sum is: " . array_sum($object) . "<br />";
echo "Average is: " . round(array_sum($object)/6, 2) . "\n";
//var_dump($object);

