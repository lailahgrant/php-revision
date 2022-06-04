<?php

echo 'hellofdgxdx';

// echo - outputs strings, numbers, html, etc
echo 123, 'hello', 10.5;

//print - write like echo but can only take in a single argument
print 123; //can't print multiple datatypes once

//print_r() - print single values and array
print_r([1,3,4]);

//var_dump() - returns more infor like data types and length 
var_dump(true);

//var_export() - similar to var_dump(). outputs a string representation of a variable
var_export('hello');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo 'Post' ?>

    or
    <?= 'one'; //no need to use echo ?>
</body>

</html>