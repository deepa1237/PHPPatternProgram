<?php
// Hollow Square Pattern

// * * * * *
// *       *
// *       *
// *       *
// * * * * *

$rows =5;
for($row=1; $row<=$rows; $row++) {
    for($col=1; $col<=$rows; $col++) {
        if($col==1  || $row == 1 ||  $col == $rows  || $row == $rows){
            echo " *";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}

// 1 2 3 4 5
// 1       5
// 1       5
// 1       5
// 1 2 3 4 5

for($row=1; $row<=$rows; $row++) {
    for($col=1; $col<=$rows; $col++) {
        if($col==1  || $row == 1 ||  $col == $rows  || $row == $rows){
            echo " ".$col;
        } else {
            echo "  ";
        }
    }
    echo "\n";
}
