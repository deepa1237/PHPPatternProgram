<?php
// Left Half Pyramid Pattern
//         * 
//       * * 
//     * * * 
//   * * * * 
// * * * * * 

$rows = 5; 

for($row=1; $row <= $rows; $row++){
    for($sp=1; $sp <= $rows - $row; $sp++){
        echo "  ";
    }
    for($col=1; $col <= $row; $col++){
        echo "* ";
    }
    echo "\n";
}
//         1 
//       1 2 
//     1 2 3 
//   1 2 3 4 
// 1 2 3 4 5   

for($row=1; $row <= $rows; $row++){
    for($sp=1; $sp <= $rows - $row; $sp++){
        echo "  ";
    }
    for($col=1; $col <= $row; $col++){
        echo $col." ";
    }
    echo "\n";
}
//      A
//     AB
//    ABC
//   ABCD
//  ABCDE
$alpha = range('A', 'Z');
for($row=0; $row < $rows; $row++) {
    for($sp=0; $sp < $rows-$row; $sp++){
        echo " ";
    }

    for($col=0; $col<= $row; $col++){
        echo $alpha[$col];
    }
    echo "\n";
}

