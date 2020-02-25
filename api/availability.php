<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="/virtual-hospital/css/default.css">
<link rel="stylesheet" href="/virtual-hospital/css/availability.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("hd").style.top = "-100px";
  } else {
    document.getElementById("hd").style.top = "-120px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
<style>
.mySlides {display:none;}

#displayslot{

	padding: 1em 0em 1em 0em;
	border-top: 1px solid rgba(255,255,255,0.08);
  background-color: skyblue;
  width:455px;
  align:center;
  margin-left:450px;
}
#bb{
    width:15%;
    background-color:GREEN;
    color: white;
    padding: 5px 5px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:575px;
  }
</style>
</head>
<body>
<ul id="hd">
<h2>Doctor's Appointment System</h2>
<li><a class="" href="/virtual-hospital/viewappointment.php">View Appointments</a></li>
<li><a class="active" href="/virtual-hospital/api/appointment.php">Make Appointment</a></li>
  <li><a class="" href="/virtual-hospital/patient.php">Patient Details</a></li>
  <li><a class="" href="/virtual-hospital/doctor.php">Doctor Details</a></li>
  <li><a href="/virtual-hospital/index.php">Home</a></li>
</ul>
<img class="nature" src="https://res.cloudinary.com/dzxofbpuq/image/upload/v1582002779/Doctorappointment/02-Ways-to-Make-the-Most-of-Your-Doctors-Appointment_First-appointment_93813283_cyano66_wr3xl2.jpg">
<br/>
<button id="bb">Book a Slot</button><br>
<table align="center" id="headers">
<tr>
  <th>&nbsp;&nbsp;&nbsp;</th>
<th>Morning</th>
	<th>Afternoon</th>
	<th>Evening</th>
</tr>
<tr>
  <th>Sun:</th>
<td><input type="radio" id="r1" name="vehicle1" value="Sunday-Morning"></td>    
<td><input type="radio" id="r2" name="vehicle1" value="Sunday-Afternoon"></td>    
<td><input type="radio" id="r3" name="vehicle1" value="Sunday-Evening"></td>    
</tr>
<th>Mon:</th>
<td><input type="radio" id="r4" name="vehicle1" value="Monday-Morning"></td>    
<td><input type="radio" id="r5" name="vehicle1" value="Monday-Afternoon"></td>    
<td><input type="radio" id="r6" name="vehicle1" value="Monday-Evening"></td>    
</tr>
<th>Tues:</th>
<td><input type="radio" id="r7" name="vehicle1" value="Tuesday-Morning"></td>    
<td><input type="radio" id="r8" name="vehicle1" value="Tuesday-Afternoon"></td>    
<td><input type="radio" id="r9" name="vehicle1" value="Tuesday-Evening"></td>    
</tr>
<th>Wed:</th>
<td><input type="radio" id="r10" name="vehicle1" value="Wednesday-Morning"></td>    
<td><input type="radio" id="r11" name="vehicle1" value="Wednesday-Afternoon"></td>    
<td><input type="radio" id="r12" name="vehicle1" value="Wednesday-Evening"></td>    
</tr>
<th>Thurs:</th>
<td><input type="radio" id="r13" name="vehicle1" value="Thursday-Morning"></td>    
<td><input type="radio" id="r14" name="vehicle1" value="Thursday-Afternoon"></td>    
<td><input type="radio" id="r15" name="vehicle1" value="Thursday-Evening"></td>    
</tr>
<th>Fri:</th>
<td><input type="radio" id="r16" name="vehicle1" value="Friday-Morning"></td>    
<td><input type="radio" id="r17" name="vehicle1" value="Friday-Afternoon"></td>    
<td><input type="radio" id="r18" name="vehicle1" value="Friday-Evening"></td>    
</tr>
<th>Sat:</th>
<td><input type="radio" id="r19" name="vehicle1" value="Saturday-Morning"></td>    
<td><input type="radio" id="r20" name="vehicle1" value="Saturday-Afternoon"></td>    
<td><input type="radio" id="r21" name="vehicle1" value="Saturday-Evening"></td>    
</tr>
</tr><br/></table>
<br/>
<h4 align="center"><b><u>Available Slots</u></b></h4>
<div id="displayslot">
</div>
<br>
<?php

?>
<script>
$(document).ready(function(){
    $('#r1').click(function(){
        $.ajax({
            url: 'ajax.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r2').click(function(){
        $.ajax({
            url: 'ajax2.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r3').click(function(){
        $.ajax({
            url: 'ajax3.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r4').click(function(){
        $.ajax({
            url: 'ajax4.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r5').click(function(){
        $.ajax({
            url: 'ajax5.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r6').click(function(){
        $.ajax({
            url: 'ajax6.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });

  $(document).ready(function(){
    $('#r7').click(function(){
        $.ajax({
            url: 'ajax7.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r8').click(function(){
        $.ajax({
            url: 'ajax8.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r9').click(function(){
        $.ajax({
            url: 'ajax9.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r10').click(function(){
        $.ajax({
            url: 'ajax10.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r11').click(function(){
        $.ajax({
            url: 'ajax11.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r12').click(function(){
        $.ajax({
            url: 'ajax12.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r13').click(function(){
        $.ajax({
            url: 'ajax13.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r14').click(function(){
        $.ajax({
            url: 'ajax14.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r15').click(function(){
        $.ajax({
            url: 'ajax15.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r16').click(function(){
        $.ajax({
            url: 'ajax16.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r17').click(function(){
        $.ajax({
            url: 'ajax17.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r18').click(function(){
        $.ajax({
            url: 'ajax18.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r19').click(function(){
        $.ajax({
            url: 'ajax19.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r20').click(function(){
        $.ajax({
            url: 'ajax20.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });
  $(document).ready(function(){
    $('#r21').click(function(){
        $.ajax({
            url: 'ajax21.php',
            type: 'post',
            success: function(response){
              $('#displayslot').html(response);
            }
        });
    });
  });

</script>
<!---------footer------------>
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



















<!-----------
<?php
$doc=$_POST['doc'];
include "connection.php";
$sql = "SELECT sun FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $sun = $row['sun'];
           }
$sql = "SELECT mon FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $mon = $row['mon'];
           
}
$sql = "SELECT tues FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $tues = $row['tues'];
           
}
$sql = "SELECT wednes FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $wednes = $row['wednes'];
           
}
$sql = "SELECT thurs FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $thurs = $row['thurs'];
           
}
$sql = "SELECT fri FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $fri = $row['fri'];
           
}

$sql = "SELECT satur FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$doc."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($doctor_name);
            $satur = $row['satur'];          
}
    
     

 
$mornng =array("1"=>"8:00","2"=>"8:15","3"=>"8:30","4"=>"8:45","5"=>"9:00","6"=>"9:15","7"=> "9:30","8"=>"9:45","9"=>"10:00","10"=>"10:15","11"=> "10:30-10:45","12"=>"10:45-11:00","13"=>"11:00-11:15","14"=>"11:15-11:30","15"=> "11:30-11:45","16"=>"11:45-12:00");
$aftrn =array("17"=>"12:00-12:15","18"=>"12:15-12:30","19"=>"12:30-12:45","20"=>"12:45-1:00","21"=>"1:00-1:15","22"=>"1:15-1:30","23"=> "1:30-1:45","24"=>"1:45-2:00","25"=>"2:00-2:15","26"=>"2:15-2:30", "27"=>"2:30-2:45","28"=>"2:45-3:00","29"=>"3:00-3:15","30"=>"3:15-3:30","31"=> "3:30-3:45","32"=>"3:45-4:00");
$evng=array("33"=>"4:00-4:15","34"=>"4:15-4:30","35"=>"4:30-4:45","36"=>"4:45-5:00","37"=>"5:00-5:15","38"=>"5:15-5:30", "39"=>"5:30-5:45","40"=>"5:45-6:00","41"=>"6:00-6:15","42"=>"6:15-6:30","43"=> "6:30-6:45","44"=>"6:45-7:00","45"=>"7:00-7:15","46"=>"7:15-7:30", "47"=>"7:30-7:45","48"=>"7:45-8:00");
foreach($mornng as $k=>$v){
  echo '<button>'.$v.'</button>';
}
echo '<br/><br/>';
foreach($aftrn as $k=>$v){
  echo '<button>'.$v.'</button>';
}
echo '<br/><br/>';
foreach($evng as $k=>$v){
  echo '<button>'.$v.'</button>';
}
echo '<br/><br/>';
           ?>  
------->