<?php
session_start();
include "connection.php";							
$sql = " INSERT INTO bookings (doctor_id,doctor_name,day,slot,time_t,date_d)
VALUES ('" . doctor_id. "','" . $_SESSION["doc"] . "', '" . $_SESSION['slot'] . "','" . $_SESSION['time'] . "','" . $_SESSION['date_d'] . "')";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Your booking has been accepted!');</script>";
							} 
else {
echo "<script>alert('There was an Error')<script>";
							}

$conn->close();
?>