<?php
    //$insert = false;
    if(isset($_POST['submit'])){
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "jploka";
      
      $con = mysqli_connect($server, $username, $password,$database);
      if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
      }
      //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      // Select the database
      //mysqli_select_db($con, $database);
      //echo "Successfully connecting to the db";
      //error_reporting(E_ALL);
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Password = $_POST['Password'];
      $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
      $Phone = $_POST['Phone'];
      $sql = "INSERT INTO `signup` (`Name`, `Email`, `Password`, `Phone`,`Timestamp`) VALUES ('$Name', '$Email', '$Password', '$Phone',current_timestamp())";
      if($con->query($sql) == true) {
          $insert = true;
      } else {
      echo "ERROR: $sql <br> " . mysqli_error($con);
      }

      $con->close();
      header('Location: index.html');
    }
?>