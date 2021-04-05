<?php
    include 'index1.php';
    session_start();
    if (isset($_POST['Login'])) {
        $username = mysqli_real_escape_string($db, $_POST['staff_id']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
      
        if (empty($username)) {
            echo "Username is required";
        }
        if (empty($password)) {
            echo "Password is required";
        }
        $query = "SELECT * FROM staff WHERE staff_id='$username' AND password='$password'";
          $results = mysqli_query($db, $query);
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['staff_id'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
          }else {
              echo "Wrong username/password combination";
          }
        }
    
?>
