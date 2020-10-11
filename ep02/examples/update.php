<?php
require __DIR__."/../vendor/autoload.php";

use \Source\Models\User;

$user = (new User())->findById(18);
$user->first_name = "Gustavo";

$user->save();
var_dump($user);