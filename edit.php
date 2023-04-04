<?php
// подключение к базе данных
$host = "localhost"; // адрес сервера
$user = "root"; // имя пользователя
$password = ""; // пароль
$database = "coffee_time"; // имя базы данных
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// получение id товара
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($link, $_GET['id']);
} else {
    die("Ошибка. ID товара не указан.");
}

// получение информации о товаре из базы данных
$query = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$row = mysqli_fetch_array($result);

// обработка изменений
if (isset($_POST['submit'])) {
    $price = mysqli_real_escape_string($link, $_POST['price']);
    $comment = mysqli_real_escape_string($link, $_POST['comment']);
    $query = "UPDATE products SET price='$price', comment='$comment' WHERE id='$id'";
    mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    header("Location: admin.php");
    exit();
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        border-radius: 5px;
    }
    h1 {
        text-align: center;
        margin-top: 0;
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"],
    input[type="number"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    input[type="file"] {
        margin-top: 5px;
    }
    button {
        padding: 5px;
        background-color: #4CAF50;
        color: #red;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    button:hover {
        background-color: #3e8e41;
    }
    .error {
        color: red;
        font-weight: bold;
        margin-top: 10px;
    }
</style>

<form method="post">
    <label>Цена товара:</label><br>
    <input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>
    <label>Комментарий:</label><br>
    <textarea name="comment"><?php echo $row['comment']; ?></textarea><br><br>
    <input type="submit" name="submit" value="Сохранить изменения">
</form>