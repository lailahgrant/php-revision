<?php
/*
* ---------- PHP Datatypes-------------------------
*/
/**
 * string         series of characters surrounded by quotes
 * integer        whole numbers
 * float          decimal numbers
 * boolean        true or false
 * array          special variable which can hold more than one value
 * object         a class
 * NULL           empty variable
 * Resource       special variable that holds a resource
 */

$name = 'Lailah'; //String
$age = 10; //int
$has_kids = false; //boolean
$cash = 20.34;


echo $name.' is '. $age.' years old <br/>';
var_dump($has_kids);
echo "<br/>$name is $age years old"; //no concatenation needed with double quotes ""

echo "<br/>${name} is ${age} years old<br/>"; //like template literals in js - RECOMMENDED

$x = '5'+'5';
echo $x;
var_dump($x);


//constants  - things that don't change e.g. database credentials
define('HOST','localhost');
define('DB_NAME', 'dev_db');
echo HOST;

//