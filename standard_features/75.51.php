<?php
$str = 'A';
if (ord($str) >= 65 and ord($str) <= 90) {
    echo 'большая буква английского алфавита';
}
if (ord($str) >= 97 and ord($str) <= 122) {
    echo 'маленькая буква английского алфавита';
}
?>