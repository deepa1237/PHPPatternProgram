<?php
// Right Half Pyramid Pattern
// *
// * *
// * * *
// * * * *

$rows = 4;

for($row = 1; $row <= $rows; $row++) {
    for($col = 1; $col <= $row; $col++){
        echo "* ";
    }
    echo "\n";
}

// 1
// 1 2
// 1 2 3
// 1 2 3 4


for($row = 1; $row <= $rows; $row++) {
    for($col = 1; $col <= $row; $col++){
        echo $col." ";
    }
    echo "\n";
}

// A 
// A B 
// A B C 
// A B C D 
$alpha = range('A', 'Z');
// print_r($alpha);
for($row = 0; $row < $rows; $row++) {
    for($col = 0; $col <= $row; $col++){
        echo $alpha[$col]." ";
    }
    echo "\n";
}