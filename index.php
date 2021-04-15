<?php
/*
 * Mark Mendoza
 * 4/15/21
 * http://mmendoza-rabara.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
include ("./functions.php");
echo "<h3>Pair Program 2</h3>";
echo "<p>1)</p>";
echo "<p>2)</p>";
$numbers = array( 7, 9, 8, 9, 8, 8, 6);
echo var_dump($numbers); //is working, yay

printArr($numbers);


echo "<p>3) Moved to functions.php</p>";


echo "<p>4)</p>";
echo "<p>Largest number is: " . largest($numbers);






?>

