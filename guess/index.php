<?php
/**
 * Guess my number, a POST version
 */
//session starts in the config file
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload.php");


// Deal with incoming variables

$number  = $_POST["number"] ?? null;
$tries   = $_POST["tries"] ?? null;
$guess   = $_POST["guess"] ?? null;
$doInit  = $_POST["doInit"] ?? null;
$doGuess = $_POST["doGuess"] ?? null;
$doCheat = $_POST["doCheat"] ?? null;


$res = "";
// Connect to the class
$game = new Guess(1000);
// Init the game
if ($doInit || $number === null) {
    $game   = new Guess();
    $tries  = $game->tries;
    $number = $game->number;
} elseif ($doGuess) {
    $game->tries();
    $tries = $game->tries;
    $res   = $game->makeGuess($number, $guess);
}

// Render the page
include("./view/form_post.php");
