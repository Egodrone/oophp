<?php
namespace Eddie\Dice;

/**
 * Throw some graphic dices.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$dice = new DiceGraphic();
$rolls = 6;
$class = [];
$zr = 0;


//fix for post like $number  = $_POST["number"] ?? null;
if (!isset($_SESSION["playerScore"])) {
    $_SESSION["playerScore"] = 0;
    $_SESSION["computerScore"] = 0;
    $_SESSION["temporary"] = 0;
}
/*
echo "Player score: " . $_SESSION["playerScore"] . "<br>";
echo "Temporary: " . $_SESSION["temporary"] . "<br>";
echo "computerScore: " . $_SESSION["computerScore"] . "<br>";
*/
$playerGo = true;
$computerGo = true;



// Call this function for computer to play:
function computerPlays() {
    $computerGo = true;
    $dice = new DiceGraphic();
    $rolls = 6;
    $res = $dice->roll();
    $res = $dice->values();
    for ($i = 0; $i < $rolls; $i++) {
        $class[] = $dice->graphic();
        if ($res[$i] == 1) {
            $computerGo = false;
        }
    }
    if ($computerGo) {
        $_SESSION["computerScore"] = $_SESSION["computerScore"] + array_sum($res);
    }
}



$res = $dice->roll();
$res = $dice->values();
for ($i = 0; $i < $rolls; $i++) {
    $class[] = $dice->graphic();
    if ($res[$i] == 1) {
        $playerGo = false;
        $_SESSION["temporary"] = 0;
    }
}
if ($playerGo) {
    //display buttons save or throw again
    //if throw again
    include("continue.php");
} else {
    echo "You Got 1. Computer is playing.";
    computerPlays();
    include("roll.php");
    //if ($computerGo) {

    //}
}

$throw = $_POST["throw"] ?? null;
$save = $_POST["save"] ?? null;
if ($throw) {
    //Throw again, store temporary points
    echo "";
}

if ($save) {
    //Save all point. (save temporary points fort the player and computer and set it to 0)
    echo "Points are saved!";
    $_SESSION["temporary"] = $_SESSION["temporary"] + array_sum($res);
    $_SESSION["playerScore"] = $_SESSION["playerScore"] + $_SESSION["temporary"];
    computerPlays();
    //include("roll.php");
}



echo "Player score: " . $_SESSION["playerScore"] . "<br>";
echo "Temporary: " . $_SESSION["temporary"] . "<br>";
echo "computerScore: " . $_SESSION["computerScore"] . "<br>";
?>



<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h1>Rolling <?= $rolls ?> graphic dices</h1>

<p class="dice-utf8b">
<?php foreach($class as $value) : ?>
    <i class="<?= "dice-sprite " . $value . $res[$zr]?>"></i>
<?php $zr++; ?>
<?php endforeach; ?>
<?php $zr = 0;?>
</p>



<p><?= implode(", ", $dice->values()) ?></p>
<p>Sum is: <?= array_sum($res) ?>.</p>


<p>Was there number one: </p>
<p>Current player: </p>

<p>Player Score: <?= $_SESSION["playerScore"] ?>.</p>
<p>Computer Score: <?= $_SESSION["computerScore"] ?>.</p>

<?php
// for development only

//$dice->destroySessions();

if ($_SESSION["playerScore"] >= 100) {
    echo "you Won!!";
    $dice->destroySessions();
}

if ($_SESSION["computerScore"] >= 100) {
    echo "Computer Won!!";
    $dice->destroySessions();
}


