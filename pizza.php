<?php

if(isset($_POST['submit'])){

$size=$_POST['size'];

$pepperoni=$_POST['pepperoni'];

$mushrooms=$_POST['mushrooms'];

$crust=$_POST['crust'];

$name=$_POST['name'];

$largeprice = 9.95;

$xlargeprice = 12.95;

$toppingsprice = 1.25;

if($crust == "Deepdish"){

$crustprice = 2.0;

}

else{

$crustprice=0;

}

$file=fopen("pizza.txt", "a");

fwrite($file, $size);

fwrite($file, $pepperoni);

fwrite($file, $mushrooms);

fwrite($file, $crust);

fwrite($file, $name);

fclose($file);

echo"<h1>ORDERD SUCCESSFULLY......SUCCESSFULLY WRITTEN IN PIZZA.TXT FILE</h1>";

}

?>

--create file pizza.txt