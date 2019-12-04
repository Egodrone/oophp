<form method="post" id="formId">
    <input id="passDes" type="text" name ="guess">
    <input type="hidden" name ="number" value="<?= $number ?>">
    <input type="hidden" name ="tries" value="<?= $tries ?>">
    <input id="buttonHome2" type="submit" name ="doGuess" value="Make a guess">
    <input id="buttonHome2" type="submit" name ="doInit" value="Start from beginning">
    <input id="buttonHome2" type="submit" name ="doCheat" value="Cheat">
</form>
