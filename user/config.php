<?php
$conn = mysqli_connect("localhost:3307","php@2023","php","push");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>