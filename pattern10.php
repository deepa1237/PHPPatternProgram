<?php
//  Full Pyramid Pattern 
//     *
//    ***
//   *****
//  *******
// *********

$rows = 5;

for($row=1; $row<=$rows; $row++) {
    for($sp=1; $sp <= $rows-$row; $sp++){
        echo "  ";
    }
    for($col=1; $col <= (2*$row-1); $col++) {
        echo "* ";
    }
    echo "\n";
}

//         1 
//       1 2 3 
//     1 2 3 4 5 
//   1 2 3 4 5 6 7 
// 1 2 3 4 5 6 7 8 9 

for($row=1; $row<=$rows; $row++) {
    for($sp=1; $sp <= $rows-$row; $sp++){
        echo "  ";
    }
    for($col=1; $col <= (2*$row-1); $col++) {
        echo $col." ";
    }
    echo "\n";
}

//           A 
//         A B C 
//       A B C D E 
//     A B C D E F G 
//   A B C D E F G H I 
$alpha = range('A','Z');
for($row=0; $row<$rows; $row++) {
    for($sp=0; $sp < $rows-$row; $sp++){
        echo "  ";
    }
    for($col=0; $col <= (2*$row); $col++) {
        echo $alpha[$col]." ";
    }
    echo "\n";
}
