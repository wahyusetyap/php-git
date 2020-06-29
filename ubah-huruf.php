<?php
function ubah_huruf($string){
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $newString = '';
    for ($i = 0, $n = strlen($string); $i < $n; $i++){
        $index = strpos($alphabet,strtolower(substr($string,$i,1))) + 1;
        if (ctype_upper($string[$i])){
            $newString.=strtoupper($alphabet[$index]);
        } elseif (ctype_lower($string[$i])){
            $newString.=$alphabet[$index];
        } else {
            $newString.=$string[$i];
        }       
    }
    return $newString;
}

// TEST CASES
echo ubah_huruf('wow');echo "<br>"; // xpx
echo ubah_huruf('developer');echo "<br>"; // efwfmpqfs
echo ubah_huruf('laravel');echo "<br>"; // mbsbwfm
echo ubah_huruf('keren');echo "<br>"; // lfsfo
echo ubah_huruf('semangat');echo "<br>"; // tfnbohbu
echo "<br>";
echo ubah_huruf('WOW');echo "<br>"; // xpx
echo ubah_huruf('DEVELOPER');echo "<br>"; // efwfmpqfs
echo ubah_huruf('LaRaVeL');echo "<br>"; // mbsbwfm
echo ubah_huruf('Ke-Ren');echo "<br>"; // lfsfo
echo ubah_huruf('S3m4ng4T');echo "<br>"; // tfnbohbu

?>
