<?php

$object = new stdClass();
$object->age = 42;
$object->details = function () {
    echo "Hi, i'm an object!";
};

echo ($object->details)() . "" .$object->age;

var_dump($object);
