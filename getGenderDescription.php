<?php      
function getGenderDescription($humanArray) {
    $man = 0;
    $woman = 0;
    $notdefined = 0;
    $lengthArray = count($humanArray);
    for ($i = 0; $i < count($humanArray); $i++) {
        $arrTemp = getPartsFromFullname($humanArray[$i]['fullname']);
         if (getGenderFromName(getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc'])) == 'woman') {
            $woman++;
        }
        if (getGenderFromName(getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc'])) == 'man') {
            $man++;
        }
        if (getGenderFromName(getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc'])) == 'not defined') {
            $notdefined++;
        }
       
    }
    $man = round(($man / $lengthArray) * 100);
    $woman = round(($woman / $lengthArray) * 100);
    $notdefined = round(($notdefined / $lengthArray) * 100);
    $result = "<br>Гендерный состав аудитории:\n
              <br>-----------------------------<br>\n
              Мужчины - $man%<br>\n
              Женщины - $woman%<br>\n
              Не удалось определить - $notdefined%";
    return $result;
   
}

?>