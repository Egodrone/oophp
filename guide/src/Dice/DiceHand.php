<?php
namespace Eddie\Dice;

/**
 * A dicehand, consisting of dices.
 */
class DiceHand extends Dice
{
    /**
     * @var Dice $dices   Array consisting of dices.
     * @var int  $values  Array consisting of last roll of the dices.
     */
     private $dices;
     private $values;
     private $arrT = array();
     private $countC = "";



    /**
     * Constructor to initiate the dicehand with a number of dices.
     *
     * @param int $dices Number of dices to create, defaults to five.
     */
    public function __construct(int $dices = 5)
    {
        $this->dices  = [];
        $this->values = [];

        for ($i = 0; $i < $dices; $i++) {
            $this->dices[]  = new Dice();
            $this->values[] = null;
            //echo sizeof($this->dices);
        }
    }

    /**
     * Roll all dices save their value.
     *
     * @return void.
     */
    public function roll()
    {
        //$dices[0] = 1;
        $diceAPi = new Dice();
        $arrSize = sizeof($this->dices);
        for ($i = 0; $i < $arrSize; $i++) {
            $dices[$i] = $diceAPi->rollTheDice();
            //echo $dices[$i];
            array_push($this->arrT, $dices[$i]);
        }
        /*
        $object = new Dice();
        $object = $object->details();
        echo "Sum is: " . array_sum($object) . "<br />";
        */
        return $this->dices;
        //return $this->arrT;
    }

    /**
     * Get values of dices from last roll.
     *
     * @return array with values of the last roll.
     */
    public function values()
    {
        $cars = array("Volvo", "BMW", "Toyota");
        //$cars = $this->dices;
        //return $this->dices;
        return $this->arrT;
    }

    /**
     * Get the sum of all dices.
     *
     * @return int as the sum of all dices.
     */
    public function sum()
    {
        $allSum = 0;
        $allSum = array_sum($this->arrT);
        return $allSum;
    }

    /**
     * Get the average of all dices.
     *
     * @return float as the average of all dices.
     */
    public function average()
    {
        $avgr = 0;
        $arrSize = sizeof($this->dices);
        $avgr = round(array_sum($this->arrT)/$arrSize, 2);
        return $avgr;
    }




    public function lastRoll()
    {
        return $this->countC;
    }
}
