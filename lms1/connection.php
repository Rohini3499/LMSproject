<?php
 include 'index1.php';
	/*if (isset($_POST['reg_user'])) {
	$staff_name = mysqli_real_escape_string($db, $_POST['staff_name']);   
   $staff_id = mysqli_real_escape_string($db, $_POST['staff_id']);
   $password = mysqli_real_escape_string($db, $_POST['password']); 
   $phone = mysqli_real_escape_string($db, $_POST['phone']);
   $gender = mysqli_real_escape_string($db, $_POST['gender']);
   $branch = mysqli_real_escape_string($db, $_POST['branch']);
   $college = mysqli_real_escape_string($db, $_POST['college']);
      $user_type = mysqli_real_escape_string($db, $_POST['user_type']);

   // Attempt insert query execution*/
   $sql = "INSERT INTO staff(staff_name, password,staff_id,phone,gender,branch,college,user_type)
values (' meg','1234','meg123',' 12456',' f ',' cs','gech')";
   if(mysqli_query($db, $sql)){
        echo "\nRecords added successfully.";
        
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
   }
   }
 
?>