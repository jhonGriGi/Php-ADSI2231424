<?php
session_start();

$user = isset($_POST['userTxt']) ? $_POST['userTxt'] : null;
$password = isset($_POST['passTxt']) ? $_POST['passTxt'] : null;
$user_array = array('name' => $user, 'password' => $password);

$users_bd_array = array(
    array('name' => 'Ana', 'password' => '123'),
    array('name' => 'Pepe', 'password' => '321'),
    array('name' => 'Arnulfus', 'password' => '123456')
);

$user_found = false;

if (in_array($user_array, $users_bd_array)) {
    $user_found = true;
}

if ($user_found) {
    $_SESSION['name'] = $user;
    $_SESSION['timeout'] = time();
    header('Location:main.php');
} else {
    header('Location:login.php?error=1');
}
