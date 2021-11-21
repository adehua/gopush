<?php
$date = date("Y-m-d H:i:s");

echo $date . PHP_EOL;
file_put_contents("date.php", $date);