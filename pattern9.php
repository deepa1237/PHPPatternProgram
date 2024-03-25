<?php 
// Diamnod pattern
//      *
//     * *
//    * * *
//   * * * *
//  * * * * * 
//   * * * * 
//    * * * 
//     * * 
//      * 

$rows = 5;

for($row=1; $row <= 2*$rows-1; $row++){
    if($row <= $rows){
        $spaces = $rows-$row;
        $cols = $row;
    } else {
        $spaces = $row - $rows;
        $cols = 2*$rows-$row;
    }
    for($sp=1; $sp <= $spaces; $sp++){
        echo " ";
    }
    for($col=1; $col <= $cols; $col++){
        echo " *";
    }
    echo "\n";
}

//      1
//     1 2
//    1 2 3
//   1 2 3 4
//  1 2 3 4 5
//   1 2 3 4
//    1 2 3
//     1 2
//      1

for($row=1; $row<=2*$rows-1;$row++ ) {
    $cols = $row <= $rows ? $row : 2*$rows-$row;

    for($sp=1; $sp <= $rows-$cols; $sp++){
        echo " ";
    }
    for($col=1; $col <= $cols; $col++){
        echo " ".$col;
    }
    echo "\n";
}

//      A
//     A B
//    A B C
//   A B C D
//  A B C D E
//   A B C D
//    A B C
//     A B
//      A

$alpha = range('A','Z');
for($row=0; $row<=2*$rows-1;$row++ ) {
    $cols = $row <= $rows ? $row : 2*$rows-$row;

    for($sp=0; $sp < $rows-$cols; $sp++){
        echo " ";
    }
    for($col=0; $col < $cols; $col++){
        echo " ".$alpha[$col];
    }
    echo "\n";
}