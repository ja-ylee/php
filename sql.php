<style>
    table {
        border-collapse: collapse;
    }
    th {
       border: 1px solid black;
    }
    td {
        border: 1px solid black;
    }
</style>
<table>
<thead>
    <tr>
        <th>Имя</th>
    </tr>
</thead>
<tbody>
<?php
    $host = 'my_db';
    $user = 'root';
    $pass = '1234';
    $name = 'students';

    $link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT `NAME`, `LOGIN` FROM `Students`';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'.$row['NAME'].'</td>';
    echo '</tr>';
}
?>
</tbody>
</table>