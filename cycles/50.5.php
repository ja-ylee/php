<?php
$arr = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
foreach ($arr as $key=>$elem) {
    if ($key == 6 || $key == 7) {
        echo '<b>'.$elem.'</b>'.'<br>';
} else {
    echo $elem.'<br>';
}
}
?>