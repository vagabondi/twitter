<?php

include_once './top.inc.php';

if ($user->isLogged()){
    header('Location: index.php');
}

echo "<form></form>";

//Tutaj już odbieramy dane:
$email = $_POST['email'];
$pwd = sha1($_POST['pwd']);

$user->login($email, $pwd);

include_once './foot.inc.php';