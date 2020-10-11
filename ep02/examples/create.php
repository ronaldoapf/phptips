<?php
require __DIR__."/../vendor/autoload.php";

use \Source\Models\User;

$user = new User();
$user->first_name = "Pedro";
$user->last_name = "Henrique";
$user->genre = "M";

$user->save();

var_dump($user);