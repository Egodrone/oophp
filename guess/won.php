<h1> You Won!!!</h1>
<form id="formId">
    <input id="passDes" type="text" name ="guess">
    <input type="hidden" name ="number" value="<?= $number ?>">
    <input type="hidden" name ="tries" value="<?= $tries ?>">
    <input id="buttonHome2f" type="text" name ="doGuess" value="Make a guess">
    <input id="buttonHome2f" type="text" name ="doInit" value="Start from beginning">
    <input id="buttonHome2f" type="text" name ="doCheat" value="Cheat">
</form>

<form action="move.php">
<input id="buttonHome2" type="submit" name ="doInit" value="Play Again">
</form>
