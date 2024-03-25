<?php
// Floyd’s Triangle 

// 1 
// 2  3 
// 4  5  6 
// 7  8  9  10 

$rows=4;
$k=1;
for($row=1;$row<=$rows;$row++) {
    for($col=1;$col<=$row;$col++){
        echo " $k ";
        $k++;
    }
    echo "\n";
}

