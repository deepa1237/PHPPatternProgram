<?php
// Pascals triangle   
//     1 
//    1 1 
//   1 2 1 
//  1 3 3 1 
// 1 4 6 4 1 

$rows = 5;

for($row=1; $row<=$rows; $row++){
    for($sp=1; $sp <= $rows-$row; $sp++){
        echo " ";
    }
    $k=1;
    for($col=1; $col<= $row; $col++){
        echo $k." ";
        $k =  $k * ($row-$col)/$col;
    }
    echo "\n";
}
