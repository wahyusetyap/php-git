<?php
function tentukan_deret_geometri($arr) {
    for ($i = 0, $n = count($arr) - 2; $i < $n; $i++){
        $firstDivision = $arr[$i + 1] / $arr[$i];
        $secondDivision = $arr[$i + 2] / $arr[$i + 1];
        if ($firstDivision != $secondDivision){
            return false;
        }
    }
    return true;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]);echo "<br>"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]);echo "<br>"; // true
echo tentukan_deret_geometri([2, 4, 6, 8]);echo "<br>"; // false
echo tentukan_deret_geometri([2, 6, 18, 54]);echo "<br>"; // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]);echo "<br>"; //false
?>