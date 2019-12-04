<?php
/**
 * Guess my number, a class supporting the game through GET, POST and SESSION.
 */
class Guess
{
    /**
     * @var int $number   The current secret number.
     * @var int $tries    Number of tries a guess has been made.
     */
    public $tries;
    public $number;
    public $res;


    /**
     * Constructor to initiate the object with current game settings,
     * if available. Randomize the current number if no value is sent in.
     *
     * @param int $number The current secret number, default -1 to initiate
     *                    the number from start.
     * @param int $tries  Number of tries a guess has been made,
     *                    default 6.
     */

    public function __construct(int $number = -1, int $tries = 6)
    {
        if ($number != 1000) {
            $number = rand(1, 100);
            $this->number = $number;
            $this->tries = $tries;
            if (!isset($_SESSION["number"])) {
                $_SESSION["number"] = $this->random();
                $_SESSION["tries"]  = $tries;
                //$_SESSION["doinit"]  = "rr";
            } else {
                $_SESSION["tries"] = 6;
            }
            return $tries;
        }
    }



    /**
     * Randomize the secret number between 1 and 100 to initiate a new game.
     *
     * @return void
     */

    public function random()
    {
        $number = rand(1, 100);
        return $number;
    }




    /**
     * Get number of tries left.
     *
     * @return int as number of tries made.
     */

    public function tries()
    {
        // Check and filter. 
        if ($_SESSION["tries"] === 0) {
            $_SESSION["tries"] = 6;
            $this->tries = $_SESSION["tries"];
        } else {
            $_SESSION["tries"] = $_SESSION["tries"] - 1;
            //echo "session_  :".$_SESSION["tries"];
            $this->tries = $_SESSION["tries"];
        }
        return $_SESSION["tries"];
    }




    /**
     * Get the secret number.
     *
     * @return int as the secret number.
     */

    public function number()
    {
        return $_SESSION["number"];
    }



    /**
     * Make a guess, decrease remaining guesses and return a string stating
     * if the guess was correct, too low or to high or if no guesses remains.
     * 
     * @throws GuessException when guessed number is out of bounds.
     *
     * @return string to show the status of the guess made.
     */

    public function makeGuess($number, $guess)
    {
        $excp = new GuessException();
        if ($guess > 100 || $guess < 1) {
            $res = $excp->throwException();
        } else {
            if ($guess === $number) {
                $res = "CORRECT";
            } elseif ($guess > $number) {
                $res = "TOO HIGH";
            } else {
                $res = "TOO LOW";
            }
        }
        return $res;
    }
}
