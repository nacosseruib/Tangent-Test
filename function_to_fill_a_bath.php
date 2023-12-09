/*
2. Write a PHP program that is responsible for filling a bath. You can define any API you like to control the bath.

Answer
*/

<?php

class Bath {
    private $waterLevel = 0;
    private $capacity;
    private $tapsOpen = false;

    public function __construct($capacity) {
        $this->capacity = $capacity;
    }

    public function openTaps() {
        $this->tapsOpen = true;
        echo "Taps are open. ";
    }

    public function closeTaps() {
        $this->tapsOpen = false;
        echo "Taps are closed. ";
    }

    public function fill($amount) {
        if (!$this->tapsOpen) {
            echo "Taps are closed. Cannot fill the bath. ";
            return;
        }

        $this->waterLevel += $amount;
        if ($this->waterLevel > $this->capacity) {
            $this->waterLevel = $this->capacity;
            echo "Bath is now full. ";
        } else {
            echo "Adding $amount liters of water. ";
        }
    }

    public function drain($amount) {
        if (!$this->tapsOpen) {
            echo "Taps are closed. Cannot drain the bath. ";
            return;
        }

        $this->waterLevel -= $amount;
        if ($this->waterLevel < 0) {
            $this->waterLevel = 0;
            echo "Bath is now empty. ";
        } else {
            echo "Draining $amount liters of water. ";
        }
    }
}

// Example usage
$bath = new Bath(50); // Bath capacity is 50 liters

$bath->openTaps(); // Open the taps
$bath->fill(10);   // Fill the bath
$bath->drain(5);   // Drain the bath
$bath->closeTaps(); // Close the taps

echo "Bath is ready!\n";

?>