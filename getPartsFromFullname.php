<?php      
function getPartsFromFullname($fullname) {
    $arrTemp = explode(' ', $fullname);
    $arrResult =   [
        'surname' => $arrTemp[0],
        'name' => $arrTemp[1],
        'patronomyc' => $arrTemp[2]
    ];
    return $arrResult;
}

?>