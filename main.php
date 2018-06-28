<?php

function bubblesort(array $data) {
    $itemCount = count($data);
    $hasChanged;
    do {
        $hasChanged = false;
        $itemCount--;
        for ($i = 0; $i < $itemCount; $i++)
            if ($data[$i] > $data[$i + 1]) {
                $tmp = $data[$i];
                $data[$i] = $data[$i + 1];
                $data[$i + 1] = $tmp;
                $hasChanged = true;
            }
    } while ($hasChanged);

    return $data; // for convenience
}

$a = [2,3,1,5,3,7,8,5,7,9,2];
print_r(bubblesort($a));
?>

<pre>C:\bubblesort> php main.php
Array
(
    [0] => 1
    [1] => 2
    [2] => 2
    [3] => 3
    [4] => 3
    [5] => 5
    [6] => 5
    [7] => 7
    [8] => 7
    [9] => 8
    [10] => 9
)</pre>