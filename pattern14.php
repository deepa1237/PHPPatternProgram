<?php
//  Number square pattern
//  4 4 4 4 4 4 4
//  4 3 3 3 3 3 4
//  4 3 2 2 2 3 4 
//  4 3 2 1 2 3 4
//  4 3 2 2 2 3 4 
//  4 3 3 3 3 3 4
//  4 4 4 4 4 4 4

$num = 4;

for($row=1; $row <= (2 * $num)-1; $row++) {
    for($col=1; $col <= (2 * $num)-1; $col++) {
        if($row <=1 || $row == (2 * $num)-1 || $col <= 1 || $col == (2 * $num)-1){
            $value = $num;
        }  else if($row == 2 || $row == (2 * $num)-2 || $col <= 2 || $col == (2 * $num)-2){
             $value = $num-1;
        } else if($row == 3 || $row == (2 * $num)-3 || $col <= 3 || $col == (2 * $num)-3){
             $value = $num-2;
        } else {
             $value = $num-3;
        }
        // $value = 1;
        echo " $value ";
    }
    echo "\n";
}