<?php
namespace Eddie\Dice;
/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

/**
 * Throw a hand of dices.
 */


$hand = new DiceHand();
$diceR = $hand->roll();
//print_r($diceR);

?><h1>Rolling a dicehand with five dices</h1>

<p><?= implode(", ", $hand->values()) ?></p>
<p>Sum is: <?= $hand->sum() ?>.</p>
<p>Average is: <?= $hand->average() ?>.</p>
