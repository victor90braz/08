<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\08\\";
require_once $basePath . "functions.php";


// value objects and mutability


function register(string $name, int $age) {

    if ($age < 0) {
        dd("Is not allowed $age");
    }

    return "$name $age";
}

$person = register('bob', -34);

dd($person);