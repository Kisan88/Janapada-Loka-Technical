<?php
        if (isset($_POST["Phone"])) {
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "jploka";
        
            $con = mysqli_connect($server, $username, $password, $database);
            if (!$con) {
                die("Connection to the database failed due to: " . mysqli_connect_error());
            }
        
            $Phone = $_POST["Phone"];
            $Password = $_POST["Password"];
            require_once "dbartist.php";
        
            $sql = "SELECT * FROM `signup` WHERE Phone = '$Phone'";
            $result = mysqli_query($con, $sql);
        
            if (!$result) {
                die("Query failed: " . mysqli_error($con));
            }
        
            $user = mysqli_fetch_assoc($result);
            header("Location: afterlogin.html");
            // if ($user) {
            //     $hashedPassword = $user["Password"]; // Get the hashed password from the database
        
            //     $isPasswordCorrect = password_verify($Password, $hashedPassword); // Verify password
        
            //     if ($isPasswordCorrect) {
            //         // Passwords match
            //         header("Location: index.php");
            //         exit();
            //     } else {
            //         // Passwords do not match
            //         echo "<script>'alert alert-danger'>Email and password do not match.</script>";
            //     }
            // } else {
            //     echo "<div class='alert alert-danger'>Email does not exist.</div>";
            // }
        }
          ?>