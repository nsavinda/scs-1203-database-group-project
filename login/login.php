<?php  
session_start();
include "../config/db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../login.php?error=Password is Required");
	}else {

		// Hashing the password
		// $password = md5($password);
        $conn = mysqli_connect($hostname, $username, $password, $db_name);
        if($conn){
            // Check connection
            echo "Connected to database";
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: ../index.php");

        }
        else{   
            echo "Connection failed";
            header("Location: ../login.php?error=Incorect User name or password");

         } 
        
        // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        // $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result) === 1) {
        // 	// the user name must be unique
        // 	$row = mysqli_fetch_assoc($result);
        // 	if ($row['password'] === $password && $row['role'] == $role) {
        // 		$_SESSION['name'] = $row['name'];
        // 		$_SESSION['id'] = $row['id'];
        // 		$_SESSION['role'] = $row['role'];
        // 		$_SESSION['username'] = $row['username'];

        // 		header("Location: ../index.php");

        // 	}else {
        // 		header("Location: ../login.php?error=Incorect User name or password");
        // 	}
        // }else {
        // 	header("Location: ../login.php?error=Incorect User name or password");
        // }

	}
	
}else {
	header("Location: ../login.php");
}