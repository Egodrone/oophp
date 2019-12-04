<?php
namespace Eddie\Dice;

/**
 * Showing off a standard class with methods and properties.
 */
class Dice
{

    /**
     * @var integer $diceThrow    Integer to store dice throw
     * @var integer $count        Integer to count throws
     */
    private $diceThrow;
    private $count;
    private $diceArr = [];
    private $rollTd;



    /**
     * Print out details about result of the throw
     */
    public function details()
    {
        $count = 0;
        while ($count < 6) {
            $diceArr[$count] = rand(1, 6);
            $count++;
            echo $count . ". " . $diceArr[$count - 1] . "<br />";
        }
        return $diceArr;
    }


    /**
     * Menthod for the class Dice/DiceHand.php
     */
    public function rollTheDice()
    {
        $rollTd = rand(1, 6);
        return $rollTd;
    }
}
