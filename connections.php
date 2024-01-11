<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$servername = "10.10.10.12:3306";
$username = "root";
$password = "c0relynx";
$db= "indexdb";
// echo "HIIII";
// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  echo ("Connection failed: ");
}
echo "Connected successfully";
    
?>