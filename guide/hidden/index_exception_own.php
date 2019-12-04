<?php

include(__DIR__ . "/config.php");
include(__DIR__ . "/src/Person5.php");

try {
    $person = new Person5("MegaMic");
    $person->setAge(-42);
} catch (PersonAgeException $e) {
    echo "Got exception: " . get_class($e) . "<hr>";
}

echo $person->details();
var_dump($person);

$person = new Person5("MegaMic", -42);

echo $person->details();
var_dump($person);
