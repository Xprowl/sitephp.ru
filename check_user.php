<?php
session_start();

require_once('connect.php');
if($_SESSION ['user'])
{
    session_unset($_SESSION ['user']);
    header('Location: auth.php');
}
$login = $_POST['Login'];
$password = $_POST['Password'];

$check_user = mysqli_fetch_all(mysqli_query($connect, "SELECT COUNT(*) FROM `admin` WHERE `login` = '$login' and `password` = '$password'"))[0][0];
if ($check_user == 1)
{
    $_SESSION ['user'] =
    [
        'login' => $login,
        'password' => $password
    ];
    
    header('Location: admin.php');
}
else
{
    echo 'Такого пользователя нет, иди вон'; //Всё что угодно можно впихнуть
}

