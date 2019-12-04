<?php
/**
 * Exception if number is bigger than 100 or lower than 1
 */
class GuessException
{
    public function throwException() {
        //include("./back.php");
        return new Exception("Value must be between 1 and 100");
    }
}
