<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\08\\";
require_once $basePath . "functions.php";


// value objects and mutability
// avoid primitive obsession - and readibility
// helps with consistency
// immutable

class Age {

    private $age;

    public function __construct($age) {

        if ($age < 0 || $age > 150) {
            throw new InvalidArgumentException('"That makes no sense!!"');
        }

        $this->age = $age;
    }

    public function increment() {

        return new self($this->age + 1);
    }
}

$age = new Age(30);

// dd($age->increment());


// ----------------------------------------------------------

class Coordinates {
    public $x;
    public $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinates $coordinates) {
    return [$coordinates->x, $coordinates->y];
}

function distances(Coordinates $begin, Coordinates $end) {
    return [$begin->x, $end->y];
}

$coord1 = new Coordinates(10, 20);
$coord2 = new Coordinates(30, 40);

echo "Coordinates for coord1: ";
print_r(pin($coord1));

echo "Distances between coord1 and coord2: ";
print_r(distances($coord1, $coord2));

