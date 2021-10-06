<?php      
function getShortName($PartName) {
    $arrTemp = getPartsFromFullname($PartName);
    $surname = mb_substr($arrTemp['surname'], 0, 1);
    $ShorName = $arrTemp['name'].' '.$surname;
    return $ShorName;
   
}

?>