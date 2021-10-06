<?php
function getFullnameFromParts($surname, $name, $patronomyc) {
    $fullname = $surname." ".$name." ".$patronomyc;
    return $fullname;
}

?>