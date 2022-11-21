<?php
$month = 5;
if ($month === 12 or $month === 1 or $month === 2){
    echo 'зима';
}   else if ($month >== 3 and $month <== 5){
    echo 'весна';
}   else if ($month >== 6 and $month <== 8){
    echo 'лето';
}   else if ($month >== 9 and $month <== 11){
    echo 'осень';
}
?>