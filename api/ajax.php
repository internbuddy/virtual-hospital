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
include "connection.php";
$t=$_POST['a'];
$sql = "SELECT sunmrng FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$t."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($sunmrng);
            $sunmrng=explode(',', $row['sunmrng']);                
}
echo '
<form method="post">
  <button id="b1" class="btn" onclick="myFunction1()" name="manipulate" value="$sunmrng[0]">'.$sunmrng[0].'</button>
  <button id="b2" class="btn" onclick="myFunction2()" name="manipulate" value="$sunmrng[1]">'.$sunmrng[1].'</button>
  <button id="b3" class="btn" onclick="myFunction3()" name="manipulate" value="$sunmrng[2]">'.$sunmrng[2].'</button>
  <button id="b4" class="btn" onclick="myFunction4()" name="manipulate" value="$sunmrng[3]">'.$sunmrng[3].'</button>
  <button id="b5" class="btn" onclick="myFunction5()" name="manipulate" value="$sunmrng[4]">'.$sunmrng[4].'</button>
  <button id="b6" class="btn" onclick="myFunction6()" name="manipulate" value="$sunmrng[5]">'.$sunmrng[5].'</button>
  <button id="b7" class="btn" onclick="myFunction7()" name="manipulate" value="$sunmrng[6]">'.$sunmrng[6].'</button>
  <button id="b8" class="btn" onclick="myFunction8()" name="manipulate" value="$sunmrng[7]">'.$sunmrng[7].'</button>
  <button id="b9" class="btn" onclick="myFunction9()" name="manipulate" value="$sunmrng[8]">'.$sunmrng[8].'</button>
  <button id="b10" class="btn" onclick="myFunction10()" name="manipulate" value="$sunmrng[9]">'.$sunmrng[9].'</button>
  <button id="b11" class="btn" onclick="myFunction11()" name="manipulate" value="$sunmrng[10]">'.$sunmrng[10].'</button>
  <button id="b12" class="btn" onclick="myFunction12()" name="manipulate" value="$sunmrng[11]">'.$sunmrng[11].'</button>
  <button id="b13" class="btn" onclick="myFunction13()" name="manipulate" value="$sunmrng[12]">'.$sunmrng[12].'</button>
  <button id="b14" class="btn" onclick="myFunction14()" name="manipulate" value="$sunmrng[13]">'.$sunmrng[13].'</button>
  <button id="b15" class="btn" onclick="myFunction15()" name="manipulate" value="$sunmrng[14]">'.$sunmrng[14].'</button>
  <button id="b16" class="btn" onclick="myFunction16()" name="manipulate" value="$sunmrng[15]">'.$sunmrng[15].'</button></form>
  ';
?>