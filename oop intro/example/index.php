<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './Person.php';
require './Student.php';
require './Teacher.php';

$basile = new Teacher('Basile', 10);
$jordy = new Student('Jordy', 1);

echo $jordy->talk();
echo $basile->talk();