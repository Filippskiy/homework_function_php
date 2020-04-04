<?php
$array = array(4,8,-1,-9,2,5,3,-4);
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
uasort($array, 'cmp');
print_r($array);