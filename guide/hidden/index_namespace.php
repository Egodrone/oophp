<?php
/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$object = new \Mos\Person\Person("MegaMic", 42);
echo $object->details();
var_dump($object);



/*
* Alternative
*/

/*
namespace Mos\Person;

$person = new Person();
*/

/*
* Or 
*/

/*
use \Mos\Person\Person;

$person = new Person();
*/
