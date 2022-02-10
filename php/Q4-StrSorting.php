<?php
    echo "<h1 style='color:green'>String Sorting</h1>";

    $srtStr = 'iamgoodinthisplace';
    echo "The given string: <b> $srtStr </b> <br>";

    $strLen;
    $crntPos;

    function sortStr(&$srtStr, $strLen, $crntPos=0){
        $nxtPos = $crntPos + 1;
        while($nxtPos < $strLen){
            if($srtStr[$nxtPos] < $srtStr[$crntPos]){
                $tempStr = $srtStr[$nxtPos];
                $srtStr[$nxtPos] = $srtStr[$crntPos];
                $srtStr[$crntPos] = $tempStr;
            }
            $nxtPos++;
        }
        if($crntPos == $strLen){
        return;
        }
        sortStr($srtStr, $strLen, $crntPos+1);
    }
    sortStr($srtStr,strlen($srtStr));
    echo "The sorted string : <b> $srtStr </b>";
?>