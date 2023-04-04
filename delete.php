<?php
	// получаем идентификатор товара из строки запроса
	$id = $_GET["id"];

	// подключаемся к базе данных
	$conn = mysqli_connect("localhost", "root", "", "coffee_time");
	// устанавливаем кодировку
	mysqli_set_charset($conn, "utf8");

	// формируем запрос на удаление товара
	$sql = "DELETE FROM products WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
		echo "Товар успешно удален";
	} else {
		echo "Ошибка: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

<br><a href="admin.php">Вернуться</a>