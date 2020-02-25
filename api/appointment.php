<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="/virtual-hospital/css/appointment.css">
<link rel="stylesheet" href="/virtual-hospital/css/default.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
<ul>
<h2>Doctor's Appointment System</h2>
<li><a class="" href="/virtual-hospital/viewappointment.php">View Appointments</a></li>
<li><a class="active" href="/virtual-hospital/appointment.php">Make Appointment</a></li>
  <li><a class="" href="/virtual-hospital/patient.php">Patient Details</a></li>
  <li><a href="/virtual-hospital/doctor.php">Doctor Details</a></li>
  <li><a href="/virtual-hospital/index.php">Home</a></li>
</ul>
<img class="nature" src="https://res.cloudinary.com/dzxofbpuq/image/upload/v1582002779/Doctorappointment/02-Ways-to-Make-the-Most-of-Your-Doctors-Appointment_First-appointment_93813283_cyano66_wr3xl2.jpg">
<br/>
<script>
$(document).ready(function(){
    $('#docname').change(function(){
        $.ajax({
            url: 'getdate.php',
            type: 'post',
            success: function(response){
              $('#avdate').html(response);
            }
        });
    });
  });
</script>
<form id="appn" method="post" align="center" action="/virtual-hospital/api/availability.php"> 
<h1><b><u>Make an Appointment</u></b></h1><br/>
Doctor: &nbsp;&nbsp;&nbsp;&nbsp;<select name="doc" id="docname"><option>--Choose--</option>
<?php 
include "connection.php";
$sql = "SELECT doctor_name FROM doctor_master";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $name = $row['doctor_name']; 
            echo '<option>'.$name.'</option>';
           
}
?>
</select><br/><br>
Date: &nbsp;&nbsp;&nbsp;&nbsp;<select name="date" id="avdate"><option>--Choose--</option>
<?php 
include "connection.php";
$sql = "SELECT date_d FROM doctor_schedule";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($date_d);
            $date_d = $row['date_d']; 
            echo '<option>'.$date_d.'</option>';
           
}
?>
</select><br><br>
<input type="submit" name="submit" value="Check Availability" />
</form><br/>
</tr><br/>
<div id= "copyright" class="container">
<div class="cont" align="center">
<input type="text" placeholder="Name"/>	
<input type="text" placeholder="Email"/><br/>
<input type="text" placeholder="Subject"/>	
<input type="text" placeholder="Contact"/>	
<br/>
<textarea rows ="5" cols = "60" name = "description" placeholder="Enter your Message here"></textarea><br/>
<input type="submit" name="submit" value="Send Message" />
</div>
<br/>
<p>&copy; All rights reserved | Footer Details | Design by Mavoix Solutions</p>
</div>
</body>
</html>

