<?php
// triangle
//     *
//    * *
//   * * *
//  * * * *
// * * * * *

$rows = 5; 

for($row=1; $row <= $rows; $row++){
    for($sp=1; $sp <= $rows - $row; $sp++){
        echo " ";
    }
    for($col=1; $col <= $row; $col++){
        echo " *";
    }
    echo "\n";
}