<?php 
include "connection.php";
$sql = "SELECT date_d FROM doctor_schedule s,doctor_master m where s.doctor_id=m.doctor_id and doctor_name='".$_POST['doc']."'";
           $result = mysqli_query($conn, $sql);  
           while ($row = $result->fetch_assoc()) {
            unset($date_d);
            $date_d = $row['doctodate_dr_name']; 
            echo '<option>'.$date_d.'</option>';
           
}
?>