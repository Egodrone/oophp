<?php
/**
 * Guess my number, a GET version
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload.php");
include(__DIR__ . "/src/Guess.php");

// Deal with incoming variables

$number  = $_GET["number"] ?? null;
$tries   = $_GET["tries"] ?? null;
$guess   = $_GET["guess"] ?? null;
$doInit  = $_GET["doInit"] ?? null;
$doGuess = $_GET["doGuess"] ?? null;
$doCheat = $_GET["doCheat"] ?? null;



// Init the game
if ($doInit || $number === null) {
    $number = rand(1, 100);
    $tries = 5;
    header("Location: index_get.php?tries=$tries&number=$number");
} elseif ($doGuess) {
    $tries -= 1;
    if ($guess === $number) {
        $res = "CORRECT";
    } elseif ($guess > $number) {
        $res = "TOO HIGH";
    } else {
        $res = "TOO LOW";
    }
}



// Render the page
?>

<?php
include("./view/formular.html");
?>



<?php if ($doGuess) : ?>
    <p>Your guess <?= $guess ?> is <b><?= $res ?></b></p>
<?php endif; ?>

<?php if ($doCheat) : ?>
    <p>CHEAT: Current number is <?= $number ?></p>
<?php endif; ?>

<?= var_dump($_GET) ?>
