<?php
// Hollow Full Pyramid Pattern
//          *
//        * * *
//      * * * * *
//    * * * * * * *
//  * * * * * * * * *
$rows=5;

for($row=1; $row<=$rows; $row++) {
    for($sp=1; $sp<=$rows-$row;$sp++){
        echo "  ";
    }
    for($col=1; $col<=2*$row-1; $col++){
        if($col==1 || $col==2*$row-1 || $row == $rows){
            echo " *";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}