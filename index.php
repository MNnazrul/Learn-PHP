<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
    <style>
        
    </style>
</head>
<body>

<pre> 

<?php

// print current installed version of PHP
// echo "Current version = ". phpversion().PHP_EOL;

echo PHP_EOL;
/*
PHP supports the following data types:

 - String
 - Integer
 - Float (floating point numbers - also called double)
 - Boolean
 - Array
 - Object
 - NULL
 - Resource

  To get the data type of a variable, use the var_dump() function.

*/


// $x = 5;
// echo var_dump($x);

/*
echo var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 's']);
var_dump(NULL);

*/

echo PHP_EOL;

// Assign Multiple Values
// $x = $y = $z = 5;
// echo $x;
// echo $y;

echo PHP_EOL;

/*

PHP has three different variable scopes:

 - local
 - global
 - static


*/

// exploring global variable

/*
$x = 10;
function myTest() {
    // global $x;
    $x = 13;
    echo $x;
    echo PHP_EOL;
}

myTest();
echo $x;

*/

/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
 */

 /*
 
 $x = 5;
 $y = 10;
 
 function myTest() {
   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
 }
 
 myTest();
 echo $y; // outputs 15

 */

/*

PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
To do this, use the static keyword when you first declare the variable:

*/

/*

function myTest() {
static $x = 0;
echo $x;
  $x++;
}

myTest();
echo PHP_EOL;
myTest();
echo PHP_EOL;
myTest();

*/







/*
echo and print();
*/

// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";

// echo PHP_EOL;

// echo "first ","second";
// echo PHP_EOL;
// $x = $y = $z = 5;
// echo $x, " ", $y;
// echo PHP_EOL;
// echo ($x), " ", ($y);


// this will not work in print. that's the drawback..
// print $x, " ", $y;


// $x = 1.234;
// echo ($x);
// echo PHP_EOL;
// echo (var_dump($x));


// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
//   public function message() {
//     return "My car is a ". $this->color . " " .$this->model . "!";
//   }
// }

// echo "working!<br><br>";

// $myCar = new Car("red", "Volvo");
// echo var_dump($myCar);




// $x = 5;
// echo var_dump($x);
// $x = (string)$x;
// echo var_dump($x);
// echo PHP_EOL;
// echo $x;



// $x = 'd';
// echo $x;
// echo PHP_EOL;
// echo chr(111);


/*

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

*/

// $x = 9223372036854775807;
// echo $x;
// echo "<br>";
// $x += 1;
// echo $x;
// echo "<br>";
// echo var_dump($x);


// echo PHP_INT_MIN;
// echo PHP_EOL;
// echo PHP_INT_MAX;
// echo PHP_EOL;
// echo PHP_INT_SIZE;
// echo "<br>";
// echo var_dump(is_long(34));


// $x = 2.2E-10;
// echo $x;
// echo "<br>";
// echo PHP_FLOAT_MIN;
// echo "<br>";
// echo is_float($x);
// echo "<br>";
// echo PHP_FLOAT_EPSILON;


// $x = "23" + "100";
// echo $x;
// echo "<br>";
// echo var_dump($x);
// echo "<br>";
// $y = 23;
// echo var_dump($y);
// echo "<br>";
// echo is_numeric($x);
// echo "<br>";
// $x = "12.3" + 100;
// echo $x;




$x = 12.54;
$xx = (int)$x;
$x1 = intval($x);
echo $x1;

?>

</pre>


</body>
</html>
