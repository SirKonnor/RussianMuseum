<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "museum";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = $_POST['data'];
$count = $_POST['count'];
$money = $_POST['money'];

$sql = "INSERT INTO ticket (data, count, money) VALUES ('$data', '$count', '$money')";
# $sql = "INSERT INTO `users` (`ID`, `Name`, `Surname`, `Secondname`, `login`, `password`, `surepassword`) VALUES (NULL, 'свусу', 'усуусв', 'увсувсв', 'bxqkxb@gmail.com', 'wd3d3ed3ed', 'ed3de3d3ed');"
if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>