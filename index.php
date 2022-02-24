<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 Html va PHP</title></title>
</head>
<body>
<?php
$a = 5;
$A = 10;
echo $a;
echo '<br>';
echo $A;
?>
<?php
define('PI', 3.14);
echo PI;
?>
<!--PI-->
<br><?php
$str = 'Hello World';
echo $str;
?>
<!--str-->
<br><?php
$firstname = "Nguyen Quoc";
$lastname = ' Gia Dat';
$fullname = $firstname . $lastname;
echo $fullname;
?>
<br><?php
$x = 10.365;
var_dump($x);
?>
<br><?php
$cars = array('Toyota', 'Bmw', 'volvo');
var_dump($cars)
?>
<br><?php
$a = 5.6;
$b = (int)$a;
var_dump($b)
?>
<br><?php
$a = 5.6;
settype($a, 'integer');
var_dump($a)
?>
<br><?php
$a = '5';
echo gettype($a);
?>

<!--bai03-->
</body>
</html>