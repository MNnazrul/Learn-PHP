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
echo "Current version = ". phpversion().PHP_EOL;

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


echo var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 's']);
var_dump(NULL);


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
$x = 10;
function myTest() {
    // global $x;
    $x = 13;
    echo $x;
    echo PHP_EOL;
}

myTest();
echo $x;





?>

</pre>


</body>
</html>
