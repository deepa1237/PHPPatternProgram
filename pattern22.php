<?php

// Hollow Inverted Full Pyramid

//  * * * * * * * * *      
//    *           *
//      *       *
//        *   *
//          *


$rows = 5;

for($row=1; $row <= $rows; $row++) {
    for($sp=1; $sp<=$row; $sp++){
        echo "  ";
    }
    for($col=1; $col <= 2*($rows-$row)+1; $col++) {
        if($row==1 || $col==1 || $col == 2*($rows-$row)+1){
            echo " *";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}