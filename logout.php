<?php
// разрушаем сессию
session_start();
session_destroy();

// перенаправляем на страницу входа
header('Location: auth.php');
exit;
?>