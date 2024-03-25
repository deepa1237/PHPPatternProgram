<?php
// Square pattern
// * * * *
// * * * *
// * * * *
// * * * *
// * * * *

$rows = 5;
$cols = 4;

for($row = 1; $row <= $rows; $row++) {
    for($col = 1; $col <= $cols; $col++) {
        echo "* ";
    }
    echo "\n";
}



