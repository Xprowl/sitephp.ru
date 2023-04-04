<!DOCTYPE html>
<html>
<head>
	<title>Админ-панель</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		form {
			margin-bottom: 20px;
		}
		input[type=text], input[type=file], input[type=submit] {
			padding: 6px;
			border: 1px solid #ddd;
			border-radius: 4px;
			margin-right: 10px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			border: none;
		}
	</style>
</head>
<body>
	<h2>Добавление товара</h2>
	<form method="post" action="admin.php" enctype="multipart/form-data">
		<label for="name">Название товара:</label>
		<input type="text" name="name" id="name"><br>
		<label for="price">Цена товара:</label>
		<input type="text" name="price" id="price"><br>
		<label for="image">Фото товара:</label>
		<input type="file" name="image" id="image"><br>
		<label for="name">Комментарий:</label>
		<input type="text" name="comment" id="comment"><br>
		<input type="submit" name="submit" value="Добавить">
	</form>

	<h2>Товары</h2>
	<table>
		<tr>
			<th>Название товара</th>
			<th>Цена товара</th>
			<th>Фото товара</th>
			<th>Комментарий</th>
			<th>Изменить</th>
			<th>Удалить</th>
		</tr>
		<?php
			// подключение к базе данных
			$host = "localhost";
			$username = "root";
			$password = "";
			$dbname = "coffee_time";
			$conn = mysqli_connect($host, $username, $password, $dbname);

			// проверка соединения
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// обработка формы добавления товара
			if (isset($_POST["submit"])) {
				$name = $_POST["name"];
				$price = $_POST["price"];
				$image = $_FILES["image"]["name"];
				$comment = $_POST["comment"];
				$tmp_name = $_FILES["image"]["tmp_name"];
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($image);
				move_uploaded_file($tmp_name, $target_file);
				$sql = "INSERT INTO products (name, price, image, comment) VALUES ('$name', '$price', '$image', '$comment' )";
				if (mysqli_query($conn, $sql)) {
				    echo "Товар успешно добавлен";
				} else {
				    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // выводим данные каждого товара
			    while($row = mysqli_fetch_assoc($result)) {
			        echo "<tr>";
			        echo "<td>" . $row["name"] . "</td>";
			        echo "<td>" . $row["price"] . "</td>";
			        echo '<td><img src="uploads/' . $row["image"] . '" width="320"></td>';
					echo "<td>" . $row["comment"] . "</td>";
					echo "<td><a href='edit.php?id=" . $row["id"] . "'>Изменить</a></td>";
					echo "<td><a href='delete.php?id=" . $row["id"] . "'>Удалить</a></td>";
					
			    }
			} else {
			    echo "Нет товаров в базе";
			}

			mysqli_close($conn);
		?>
	</table>
	<div class="account-menu">
  <span><?php echo $_SESSION['username']; ?></span>
  <div class="account-dropdown">
    <a href="logout.php">Выйти</a>
  </div>
</div>
</body>
</html>