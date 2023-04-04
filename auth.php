<?php
session_start();
require_once('connect.php');
if ($_SESSION ['user'])
{
  header('Location: admin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/auth.css">
  <title>Зайти в будку</title>
</head>
<body>
<form action="check_user.php" method ='post'>
    <div class="reg_block">
      <div style="text-align: center;"><h2>Войти в админку</h2></div>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="Login" name="Login">
    </div>
  
    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Password" name="Password">
    </div>
  
    <button type="submit" class="btn">Войти</button>
    </div>
  </form>
</body>
</html>



