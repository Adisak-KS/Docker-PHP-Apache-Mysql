<?php

// ต้องตรงกับที่กำหนดใน environment variable ของ MySQL service
$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "MYSQL_DATABASE";


$dsn = "mysql:host=$servername;dbname=$dbname";

try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected PHP(PDO) successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// ต้องตรงกับที่กำหนดใน environment variable ของ MySQL service
// $servername = "db";
// $username = "MYSQL_USER";
// $password = "MYSQL_PASSWORD";
// $dbname = "MYSQL_DATABASE";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected PHP(MySQLi) successfully";
