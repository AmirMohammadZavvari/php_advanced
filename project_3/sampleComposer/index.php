<?php
require __DIR__ . "/vendor/autoload.php" ;
use digikala\User;

$user = new User();
echo $user->getName();