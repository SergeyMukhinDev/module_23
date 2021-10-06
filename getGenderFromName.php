<?php      
function getGenderFromName($fullName) {
    $gender = 0;
 
    $arrTemp = getPartsFromFullname($fullName);

    if (mb_substr($arrTemp['patronomyc'],-2) == 'ич') {
        $gender++;
    }
    if ((mb_substr($arrTemp['name'], -1) == 'й') || (mb_substr($arrTemp['name'], -1) == 'н')) {
        $gender++;
    }
    if (mb_substr($arrTemp['surname'], -2) == 'в') {
        $gender++;
    }
    if (mb_substr($arrTemp['patronomyc'],-3) == 'вна') {
        $gender--;
    }
    if (mb_substr($arrTemp['name'], -1) == 'а')  {
        $gender--;
    }
    if (mb_substr($arrTemp['surname'], -2) == 'ва') {
        $gender--;
    }
    
    if ($gender < 0) {
        $gender = 'woman';
    } else if ($gender > 0 ) {
        $gender = 'man';
    } else if ($gender == 0) {
        $gender = 'not defined';
    }
    return $gender;
    

}


?>