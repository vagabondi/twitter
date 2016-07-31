<?php

$conn = new mysqli('localhost', 'root', '1234', 'exercises_db');

include_once './classes/user.class.php';

$user = new User();
$user->autoLogin();