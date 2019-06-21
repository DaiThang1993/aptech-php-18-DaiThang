<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aptech_18_4";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password']; 
$sql = "INSERT INTO users(name, email, Password)
values ('$name','$email','$password')";
if (mysqli_query($conn, $sql)) {
    echo "Create user successfully";
} else {
    echo "Error creating table:".mysqli_error($conn);
}
mysqli_close($conn);