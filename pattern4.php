<?php
//  Half diamond pattern
// *
// * *
// * * *
// * * * *
// * * * * *
// * * * *
// * * *
// * *
// *

$rows = 5;

for($row = 1 ; $row <= 2*$rows - 1; $row++){
 
    if($row <= $rows) {
        for($col = 1; $col <= $row; $col++){
            echo "*";
        }
    } else {
        for($col1 = 1; $col1 <= (2*$rows - $row); $col1++){
            echo "*";
        }
    }
    echo "\n";
}