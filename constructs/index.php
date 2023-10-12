<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\08\\";
require_once $basePath . "functions.php";


// value objects and mutability
// avoid primitive obsession - and readibility
// helps with consistency

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

dd($age->increment());

/*
function register(string $name, Age $age) {}

register('John Doe', $age);
*/
