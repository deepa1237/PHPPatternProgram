<?php
//  Full number pyramid
//         1
//       2 1 2
//     3 2 1 2 3
//   4 3 2 1 2 3 4
//  5 4 3 2 1 2 3 4 5
$rows = 5;

for($row=1; $row <= $rows; $row++)
{
    for($sp=1; $sp<=$rows-$row; $sp++){
        echo "  ";
    }
    for($col=$row; $col >= 1; $col--){
        echo $col." ";
    }
    for($col1=2; $col1 <= $row; $col1++){
        echo $col1." ";
    }
    echo "\n";
}