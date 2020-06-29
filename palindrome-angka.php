<?php

function palindrome_angka($angka) {
  do {
    $angka++;
  } while (!isPalindrome($angka));
  return $angka;
}

function isPalindrome($angka){
  $numString = strval($angka);
  for ($i = 0, $n = strlen($numString) - 1; $i <= $n; $i++){
    if ($numString[$i] != $numString[$n - $i]){
      return false;
    }
    return true;
  }
}

// TEST CASES
echo palindrome_angka(8); echo "<br>"; // 9 
echo palindrome_angka(10); echo "<br>"; // 11
echo palindrome_angka(117); echo "<br>"; // 121
echo palindrome_angka(175); echo "<br>"; // 181
echo palindrome_angka(1000); echo "<br>"; // 1001

?>