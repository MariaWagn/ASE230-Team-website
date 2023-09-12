<?php
/*This function calculates the team member's age based on their date of birth (parameter) and the current date. Then, it returns the member's age. */

function age($birthdate){
$currentdate = date('ymd');
$memberAge = $currentdate - $birthdate;
return substr($memberAge, 0, 2);
}
?>