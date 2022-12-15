<?php
// this is string
echo "this is my first php line <br>";

//this is veriable
$var = "this is some text<br>";
echo "$var";

//this concatination & normal string
$fname = "sanjana";
$sname = " goldar<br>";

echo $fname.$sname."this is me<br>";

//operators

//arithmetic opretion

$f=15;
$s=5;
//addition
$value= $f+$s;
echo "addition:".$value;

//subtraction
$value= $f-$s;
echo "\nsubtraction:".$value;

//multification
$value= $f*$s;
echo "\nmulti:".$value;

//division
$value= $f/$s;
echo "\ndivision:".$value;

//modulation [reminder]
$value= $f%$s;
echo "\nmodular:".$value;


//increment /dicrement operators
$a=22;

$a++;
echo "\ndecrement:".$a++;

$a--;
echo "\nincrement:".$a--;

//comparision operator

$x=9;
$y=8;
//==sign
var_dump($x==$y);

//!=sign
var_dump($x!=$y);

//<=sign
var_dump($x<=$y);

//>=sign
var_dump($x>=$y);

//<sign
var_dump($x<$y);

//>sign
var_dump($x>$y);

//logical & ternary [conditation] operator




?>