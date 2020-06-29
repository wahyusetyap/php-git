<?php
function tentukan_deret_aritmatika($arr) {
    for ($i = 0, $n = count($arr) - 2; $i < $n; $i++){
        $firstSubstraction = $arr[$i + 1] - $arr[$i];
        $secondSubstraction = $arr[$i + 2] - $arr[$i + 1];
        if ($firstSubstraction != $secondSubstraction){
            return false;
        }
    }
    return true;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); echo "<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); echo "<br>";// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); echo "<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); echo "<br>";// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]); echo "<br>";// false
?>