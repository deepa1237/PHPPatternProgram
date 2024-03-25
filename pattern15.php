<?php
// Rhombus Pattern

//     * * * * * 
//    * * * * * 
//   * * * * * 
//  * * * * * 
// * * * * * 

$rows = 5;

for($row=1;$row<=$rows;$row++){
    for($sp=1; $sp<=$rows-$row;$sp++){
        echo " ";
    }
    for($col=1; $col<=$rows;$col++){
        echo "* ";
    }
    echo "\n";
}
//     1 2 3 4 5 
//    1 2 3 4 5 
//   1 2 3 4 5 
//  1 2 3 4 5 
// 1 2 3 4 5 

for($row=1;$row<=$rows;$row++){
    for($sp=1; $sp<=$rows-$row;$sp++){
        echo " ";
    }
    for($col=1; $col<=$rows;$col++){
        echo $col." ";
    }
    echo "\n";
}
//      A B C D E 
//     A B C D E 
//    A B C D E 
//   A B C D E 
//  A B C D E 
 
$alpha = range('A','Z');
for($row=0;$row<$rows;$row++){
    for($sp=0; $sp<$rows-$row;$sp++){
        echo " ";
    }
    for($col=0; $col<$rows;$col++){
        echo $alpha[$col]." ";
    }
    echo "\n";
}

