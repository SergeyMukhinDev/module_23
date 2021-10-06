<?php
include 'example_persons_array.php';
include 'getFullnameFromParts.php';
include 'getPartsFromFullname.php';
include 'getShortName.php';
include 'getGenderFromName.php';
include 'getGenderDescription.php';
include 'getPerfectPartner.php';

$arrTemp = getPartsFromFullname($example_persons_array[1]['fullname']);
echo 'Функция getPartsFromFullname - ';
print_r ($arrTemp);
echo '<br>';
echo 'Функция getFullnameFromParts - '.getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc']); 
echo '<br>';
echo 'Функция getShortName - '.getShortName (getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc']));
echo '<br>';
echo 'Функция getGenderFromName - '.getGenderFromName(getFullnameFromParts($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc']));
echo '<br>';
echo 'Функция getGenderDescription - '.getGenderDescription($example_persons_array);
echo '<br>';
echo 'Функция getPerfectPartner - '.getPerfectPartner($arrTemp['surname'], $arrTemp['name'], $arrTemp['patronomyc'], $example_persons_array);

?>