<?php 
//Inverted triangle
//  * * * * *
//   * * * *
//    * * *
//     * *
//      *

$rows = 5;

for($row=1; $row <= $rows; $row++)
{
    for($sp=1; $sp <= $row; $sp++) {
        echo " ";
    }
    for($col=1; $col <= $rows-$row+1; $col++){
        echo "* ";
    }
    echo "\n";
}