<?php
function pasangan_terbesar($angka){
    $numString = strval($angka); //cast number into string
    $max = 0; // variable for max number
    for ($i = 0, $n = strlen($numString)-1; $i < $n; $i++){
        $numCouple = (int)$numString[$i].$numString[$i+1]; // create couple number
        $max = ($numCouple > $max)? $numCouple: $max; // compare the number with max
    }
    return $max;
}

// TEST CASES
echo pasangan_terbesar(641573);echo "<br>"; // 73
echo pasangan_terbesar(12783456);echo "<br>"; // 83
echo pasangan_terbesar(910233);echo "<br>"; // 91
echo pasangan_terbesar(71856421);echo "<br>"; // 85
echo pasangan_terbesar(79918293);echo "<br>"; // 99

?>