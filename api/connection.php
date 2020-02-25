<?php
$conn=mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'doctor');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
