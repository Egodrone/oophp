<?php

include(__DIR__ . "/config.php");
//include(__DIR__ . "/index_session_destroy.php");
include(__DIR__ . "/src/Person5.php");

session_name("edch13");
session_name("person");
session_start();

if (!isset($_SESSION["person"])) {
    $_SESSION["person"] = new Person5("MegaMic", 42);
}

$person = $_SESSION["person"];
$age = $person->getAge();
$person->setAge($age + 1);
echo $person->details();
