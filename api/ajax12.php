<html>
<head>
<style>
    .btn:hover {
        background-color: rgb(31, 201, 15);
        transition: all 0.3s;
        
}
</style>
</head>	
<script>
function myFunction1() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b1").disabled = true;}  
}
function myFunction2() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b2").disabled = true;}  
}
function myFunction3() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b3").disabled = true;}  
}
function myFunction4() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b4").disabled = true;}  
}
function myFunction5() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b5").disabled = true;}  
}
function myFunction6() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b6").disabled = true;}  
}
function myFunction7() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b7").disabled = true;}  
}
function myFunction8() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b8").disabled = true;}  
}
function myFunction9() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b9").disabled = true;}  
}
function myFunction10() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b10").disabled = true;}  
}
function myFunction11() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b11").disabled = true;}  
}
function myFunction12() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b12").disabled = true;}  
}
function myFunction13() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b13").disabled = true;}  
}
function myFunction14() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b14").disabled = true;}  
}
function myFunction15() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b15").disabled = true;}  
}
function myFunction16() {    
    if(confirm("Are you sure to Book this slot ?")){
  alert("Your slot has been booked! Thank you !!!");
    document.getElementById("b16").disabled = true;}  
}
</script>
</html><?php 
session_start();

include "connection.php";
$sql = "SELECT wedevng FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$_SESSION['doc']."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($wedevng);
            $wedevng=explode(',', $row['wedevng']);                
}
echo '
  <button id="b1" class="btn" onclick="myFunction1()">'.$wedevng[0].'</button>
  <button id="b2" class="btn" onclick="myFunction2()">'.$wedevng[1].'</button>
  <button id="b3" class="btn" onclick="myFunction3()">'.$wedevng[2].'</button>
  <button id="b4" class="btn" onclick="myFunction4()">'.$wedevng[3].'</button>
  <button id="b5" class="btn" onclick="myFunction5()">'.$wedevng[4].'</button>
  <button id="b6" class="btn" onclick="myFunction6()">'.$wedevng[5].'</button>
  <button id="b7" class="btn" onclick="myFunction7()">'.$wedevng[6].'</button>
  <button id="b8" class="btn" onclick="myFunction8()">'.$wedevng[7].'</button>
  <button id="b9" class="btn" onclick="myFunction9()">'.$wedevng[8].'</button>
  <button id="b10" class="btn" onclick="myFunction10()">'.$wedevng[9].'</button>
  <button id="b11" class="btn" onclick="myFunction11()">'.$wedevng[10].'</button>
  <button id="b12" class="btn" onclick="myFunction12()">'.$wedevng[11].'</button>
  <button id="b13" class="btn" onclick="myFunction13()">'.$wedevng[12].'</button>
  <button id="b14" class="btn" onclick="myFunction14()">'.$wedevng[13].'</button>
  <button id="b15" class="btn" onclick="myFunction15()">'.$wedevng[14].'</button>
  <button id="b16" class="btn" onclick="myFunction16()">'.$wedevng[15].'</button>
  ';

?>