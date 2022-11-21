<?php
$num = 123456;
$str = (string) $num;
$sum1 = (int) $str[0] + (int) $str[1] + (int) $str[2];
$sum2 = (int) $str[3] + (int) $str[4] + (int) $str[5];
if ($sum1 === $sum2) {
    echo 'суммы равна';
}   else {
    echo 'суммы не равны';
}
?>