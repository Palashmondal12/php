<?php




$fees = 20000;

$profit = ($fees >=20000) ? "you get paid 25%" : (($fees>= 10000 && $fees<2000) ? "you get 20%" : (($fees>=7000 && $fees<10000)? "you get 15%" : "Invalid input"));
 echo $profit;
