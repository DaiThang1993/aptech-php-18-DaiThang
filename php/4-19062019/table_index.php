<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aptech_18_4";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Users (
    id int auto_increment primary key,
    name VARCHAR(50),
    email varchar(100),
    Password varchar(50)
)";
if (mysqli_query($conn,$sql)) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table:".mysqli_error($conn);
}
mysqli_close($conn);
?>