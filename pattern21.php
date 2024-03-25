<?php
// diamond pattern

//          *
//        * * *
//      * * * * *
//    * * * * * * *
//  * * * * * * * * *
//    * * * * * * *
//      * * * * *
//        * * *
//          *
$n = 5;

for($row=1; $row<=2*$n-1;$row++) {

    $val = $row > $n ?  2*(2*$n-$row)-1 : 2 * $row -1;
    $spaces =  $row <= $n ? $n-$row : $row- $n;

    for($sp=1; $sp<=$spaces; $sp++) {
        echo "  ";
    }
    for($col=1; $col<=$val; $col++) {
        echo " *";
    }
    echo "\n";
}