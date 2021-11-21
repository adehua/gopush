<?php
$date = date("Y-m-d");

echo $date . PHP_EOL;
file_put_contents("date.php", $date);