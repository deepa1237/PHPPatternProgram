<?php
//  Number Diamond pattern
// 1        1
// 2      2 1 2
// 3    3 2 1 2 3
// 4  4 3 2 1 2 3 4
// 5    3 2 1 2 3
// 6      2 1 2
// 7        1
$rows = 4;

for($row=1; $row < (2*$rows); $row++)
{
    $totalcols = $row > $rows ?  2*$rows-$row : $row;

    for($sp=1; $sp<=$rows-$totalcols; $sp++){
        echo "  ";
    }
    for($col= $totalcols ; $col >= 1; $col--){
        echo $col." ";
    }
    for($col1=2; $col1 <= $totalcols; $col1++){
        echo $col1." ";
    }
    echo "\n";
}