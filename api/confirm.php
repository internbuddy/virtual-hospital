<?php
include "connection.php";							
echo '<script>
if(confirm("Are you sure to Book this slot ?")){';
	$sql = " INSERT INTO bookings (doctor_name,day,slot,time_t,date_d)
	VALUES ('" . $_POST["doc"] . "', '" . $_POST['slot'] . "','" . $_POST['time'] . "','" . $_POST['date_d'] . "')";
	$conn->close();
echo'
  alert("Your slot has been booked! Thank you !!!");
	}  
	</script>';
	?>