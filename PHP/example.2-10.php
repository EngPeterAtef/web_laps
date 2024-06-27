<!DOCTYPE HTML
<html>
<head><title>Bottle Counter</title></head>
<body>
<?php
class Vehicle {
    public $make;
    public $model;
    
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMakeAndModel() {
        return $this->make . " " . $this->model;
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $doors) {
        parent::__construct($make, $model); // Call the parent constructor
        $this->doors = $doors;
    }

    public function getDetails() {
        return $this->getMakeAndModel() . ", Doors: " . $this->doors;
    }
}


$car = new Car('Toyota', 'Corolla', 4);
echo $car->getDetails(); // Outputs: Toyota Corolla, Doors: 4
?>
</body></html>
