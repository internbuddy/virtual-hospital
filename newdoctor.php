<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="/doctor/css/appointment.css">
<link rel="stylesheet" href="/doctor/css/default.css">

<style>
.mySlides {display:none;}
</style>
</head>
<body>
<ul>
<h2>Doctor's Appointment System</h2>
<li><a class="" href="/doctor/viewappointment.php">View Appointments</a></li>
<li><a class="active" href="/doctor/appointment.php">Make Appointment</a></li>
  <li><a class="" href="/doctor/patient.php">Patient Details</a></li>
  <li><a href="/doctor/doctor.php">Doctor Details</a></li>
  <li><a href="/doctor/index.php">Home</a></li>
</ul>
<img class="nature" src="https://res.cloudinary.com/dzxofbpuq/image/upload/v1582002779/Doctorappointment/02-Ways-to-Make-the-Most-of-Your-Doctors-Appointment_First-appointment_93813283_cyano66_wr3xl2.jpg">
<br/>

<form id="appn" method="post" align="center"> 

Doctor:<select><option color="black">--Choose--</option>
<?php
$conn = mysqli_connect("localhost", "root", "root", "doctor");  
          $sql = "SELECT doctor_name FROM doctor_master";
           $result = mysqli_query($conn,$sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $name = $row['doctor_name']; 
            echo '<option>'.$name.'</option>';         
}
?>
</select><br/><br/>
<input type="submit" name="submit" value="Book Appointment" />
</form>
<br/>
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

