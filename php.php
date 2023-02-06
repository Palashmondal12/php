<?php




$fees = 20000;

$profit = ($fees >=20000) ? "you get paid 25%" : (($fees>= 10000 && $fees<2000) ? "you get 20%" : (($fees>=7000 && $fees<10000)? "you get 15%" : "Invalid input"));
 echo $profit;
\


//$tf = "7000";
//$profit = ($tf >= 20000) ? "You get paid 25%" : (($tf >= 10000 && $tf < 20000) ? "You get paid 20%" : (($tf < 10000 && $tf > 7000) ? "You get paid 15%" : "Invalid Data"));

//echo $profit;