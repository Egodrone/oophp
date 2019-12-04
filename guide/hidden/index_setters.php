<?php

include(__DIR__ . "/config.php");
include(__DIR__ . "/src/Person3.php");


$object = new Person1();
$object->setAge(67);
$object->getAge();
$object->setName("Booba");
$object->getName();
//$object->age = 42;
//$object->name = "MegaMic";

echo $object->details();
var_dump($object);
