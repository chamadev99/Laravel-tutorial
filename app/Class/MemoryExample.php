<?php
namespace App\Class;
class MemoryExample {
    private $data; // Simulate memory allocation
    private $name;

    // Constructor - Allocate memory
    public function __construct($name, $size) {
        $this->name = $name;

        // Allocate memory by creating an array with the given size
        $this->data = array_fill(0, $size, rand(1, 100));

        echo "Constructor: Memory allocated for {$this->name} ({$size} items) </br>" ;
    }

    // Method to simulate processing
    public function process() {
        echo "{$this->name} is processing data... </br>" ;
        echo "Data size: " . count($this->data) . "</br>";
    }

    // Destructor - Deallocate memory
    public function __destruct() {
        echo "Destructor: Releasing memory for {$this->name} </br>" ;

        // Explicitly free up memory
        $this->data = null;

        echo "{$this->name} is destroyed! </br>" ;
    }
}



?>
