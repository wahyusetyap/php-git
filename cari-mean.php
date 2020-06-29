<?php

function cari_mean($arr){
    return round(array_sum($arr) / count($arr));
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); echo "<br>"; // 3
echo cari_mean([3, 5, 7, 5, 3]); echo "<br>"; // 5
echo cari_mean([6, 5, 4, 7, 3]); echo "<br>"; // 5
echo cari_mean([1, 3, 3]); echo "<br>"; // 2
echo cari_mean([7, 7, 7, 7, 7]); echo "<br>"; // 7

?>