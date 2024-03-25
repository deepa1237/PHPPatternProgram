<?php
// Hollow Hourglass Pattern
//     1 2 3 4 5 6 7 8 9  
// 1   * * * * * * * * *
// 2     * * * * * * *
// 3       * * * * *
// 4         * * *
// 5           *
// 6         * * *
// 7       * * * * *
// 8     * * * * * * *
// 9   * * * * * * * * *
$n = 5;
for($row=1; $row<=2*$n-1;$row++) {
    $val =  $row <= $n ? 2*($n-$row)+1 : 2*($row-$n)+1;
    $space = $row <= $n ? $row : (2 * $n)-$row;

    for($sp=1;$sp<=$space;$sp++) {
        echo "  ";
    }
    for($col=1;$col<=$val;$col++) {
       
        if($row == 1 || $col == 1 || $col == $val || $row == 2*$n-1){
            echo " *";  
        } else {
            echo "  ";
        }
    }
    echo "\n";
}

for($row=1; $row<=2*$n-1;$row++) {
    $val =  $row <= $n ? 2*($n-$row)+1 : 2*($row-$n)+1;
    $space = $row <= $n ? $row : (2 * $n)-$row;

    for($sp=1;$sp<=$space;$sp++) {
        echo "  ";
    }
    for($col=1;$col<=$val;$col++) {
       
        if($row == 1 || $col == 1 || $col == $val || $row == 2*$n-1){
            echo " ".$col;  
        } else {
            echo "  ";
        }
    }
    echo "\n";
}