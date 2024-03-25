<?php
// Inverted Right Half Pyramid Pattern
// * * * * * 
// * * * * 
// * * * 
// * * 
// * 

$rows = 5;

for($row = 1; $row <= $rows; $row++){
    for($col = 1; $col <= $rows-$row+1; $col++){
        echo "* ";
    }
    echo "\n";
}

// 1 2 3 4 5 
// 1 2 3 4 
// 1 2 3 
// 1 2 
// 1 

for($row = 1; $row <= $rows; $row++){
    for($col = 1; $col <= $rows-$row+1; $col++){
        echo $col." ";
    }
    echo "\n";
}

// A B C D E 
// A B C D 
// A B C 
// A B 
// A 
$alpha = range('A','Z');
for($row = 0; $row < $rows; $row++){
    for($col = 0; $col < $rows-$row; $col++){
        echo $alpha[$col]." ";
    }
    echo "\n";
}





