<?php
namespace Eddie\Dice;

/**
 * A graphic dice.
 */
class DiceGraphic extends DiceHand
{
    /**
     * @var integer SIDES Number of sides of the Dice.
     */
    const SIDES = 6;
    private $computerScore;
    private $playerScore;


    /**
     * @var int $lastRoll  Value of the last roll.
     */
    //private $lastRoll;
    protected $lastRoll;

    /**
     * Constructor to initiate the dice with six number of sides.
     */
    public function __construct()
    {
        parent::__construct(self::SIDES);
    }


    /**
     * Get a graphic value of the last rolled dice.
     *
     * @return string as graphical representation of last rolled dice.
     */
    public function graphic()
    {
        //return "dice-" . $this->getLastRoll();
        //return "dice-" . $this->lastRoll;
        return "dice-" .  $this->lastRoll();
    }



    /**
     * @return integer for the dice last roll ()
     */
    public function graphic2()
    {
        //return "dice-" . $this->getLastRoll();
        //return "dice-" . $this->lastRoll;
        return "dice-" .  $this->lastRoll();
    }



    /**
     * Get a graphic value of the last rolled dice.
     *
     * @return string as graphical representation of last rolled dice.
     */
    public function destroySessions() 
    {
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                 session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        // Finally, destroy the session.
        session_destroy();
        //return " ";
    }
}
