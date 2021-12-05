<?php

$bill = 0 ;
$unit= 75;
if ($unit < 50){
    $bill = 3.5;
    echo "bill = ".$bill;

}elseif ($unit < 100) {
    $bill = 4 ;
    echo ("bill = ".$bill);

}elseif ($unit > 150) {
    $bill = 6.5;
    echo ("bill = ".$bill);

}


?>