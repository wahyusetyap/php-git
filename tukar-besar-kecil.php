<?php
function tukar_besar_kecil($string){
    $newString = '';
    for ($i = 0, $n = strlen($string); $i < $n; $i++){
        $newString.= (ctype_upper($string[$i]))? strtolower($string[$i]): strtoupper($string[$i]); 
    }
    return $newString;
}

// TEST CASES
echo tukar_besar_kecil('Hello World');echo "<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY');echo "<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!');echo "<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me');echo "<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW');echo "<br>"; // "001-a-3-5tRDyw"

?>