
<?php      
function getPerfectPartner($surname, $name, $patronomyc, $humanArray) {
   function convert ($word) {
      $word = mb_strtolower($word);
      $first = mb_substr($word, 0, 1);
      $first = mb_strtoupper($first);
      $word = $first.mb_substr($word, 1);
      return $word; 
   }
   $surname = convert($surname);
   $name = convert($name);
   $patronomyc = convert($patronomyc);
   $fullName = getFullnameFromParts ($surname, $name, $patronomyc);
   $gender = getGenderFromName ($fullName);
   do {
   $randomMan = $humanArray[rand(0, count($humanArray))]['fullname'];
   $genderRandomMan = getGenderFromName ($randomMan);
   if ($gender <> $genderRandomMan ) {
      $randPerc = mt_rand(5000, 10000)/100;
      $result = getShortName($fullName).'. + '.getShortName($randomMan).". =<br>\n
      &#10084; Идеально на ${randPerc}%";
      return $result;

  } 
   } while ($gender == $genderRandomMan);
   
 
   



   
}

?>