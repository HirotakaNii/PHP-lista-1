<?php

$num1=15;
$num2=5;
$num3=45;
$t = 0;
$cont = 0;




while ($cont<5){



if ( $num1>$num2){

$t = $num1;
$num1=$num2;
$num2 = $t;
}
elseif ($num2>$num3){

$t = $num2;
$num2= $num3;
$num3 = $t;
}

$cont++;
}

echo "$num3 $num2 $num1";

?>