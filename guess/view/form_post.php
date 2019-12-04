<!doctype html>
<html>
<head>
<title>Guess my number</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>



<body>
<h1>Guess my number</h1>
<p>Guess an integer between 1 and 100, you have <?= $tries ?> left.</p>

<?php
if ($res == "CORRECT") {
    include("won.php");
} else if ($tries == 0) {
    include("triesOver.php");
} else {
    include("continue.php");
}
?>


<?php if ($doGuess) : ?>
    <p>Your guess <strong> <?= $guess ?></strong> is <b><?= $res ?></b></p>
<?php endif; ?>

<?php if ($doCheat) : ?>
    <p>CHEAT: Current number is <b> <?= $number ?></b></p>
<?php endif; ?>

<!-- var_dump($_POST) -->
</body>
</html>
