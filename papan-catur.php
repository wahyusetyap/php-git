<?php

function papan_catur($angka) {
    $chessBoard = "";
    $blackBox = true;
    $rowLength = $angka * 2 - 1;
    $boxNum = $angka*$rowLength;
    for ($i = 1; $i <= $boxNum; $i++){
        if ($blackBox){
            $chessBoard =  $chessBoard."#";
            $blackBox = false;
        } else{
            $chessBoard =  $chessBoard."&nbsp";
            $blackBox = true;
        }

        if ($i % $rowLength == 0){
            $chessBoard.="<br>";
        }
    }
    return $chessBoard;
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
*/
echo "<br>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/