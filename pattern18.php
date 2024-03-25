<?php
//  Hourglass Pattern
//    * * * * * * * * *
//      * * * * * * *
//        * * * * *
//          * * *
//            *
//          * * *
//        * * * * *
//      * * * * * * *
//    * * * * * * * * *
$n = 5;
for($row=1; $row<=2*$n-1;$row++) {

    $val =  $row <= $n ? 2*($n-$row)+1 : 2*($row-$n)+1;
    $space = $row <= $n ? $row : (2 * $n)-$row;

    for($sp=1;$sp<=$space;$sp++) {
        echo "  ";
    }
    for($col=1;$col<=$val;$col++) {
        echo " *";  
    }
    echo "\n";
}