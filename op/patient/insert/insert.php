<?php  
      include("../../../template/header.php");
      include("../../../permission/patient.php");
include "../../../config/db.php";

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if (isset($_POST['name']) ) {

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

	$name = test_input($_POST['name']);
	// $address = test_input($_POST['address']);
    // $mobile = test_input($_POST['mobile']);
    // $dea = test_input($_POST['dea']);
    // $council = test_input($_POST['council']);

    // $arrival_date = $_POST['arrival_date'];
    // $arrival_time = $_POST['arrival_time'];
    $admitted_date = $_POST['admitted_date'];
    $admitted_time = $_POST['admitted_time'];
    $ward_no = test_input($_POST['ward_no']);
    $bed_id = test_input($_POST['bed_id']);

	if (empty($name)) {
		header("Location: ../login.php?error=All data are Required");
	}else {

        $conn = mysqli_connect($hostname, $username, $password, $db_name);
        if($conn){
            // Check connection
            echo "Connected to database";

            $sql = "INSERT INTO patient (name, admitted_date, admitted_time, ward_no, bed_id) VALUES ('$name', '$admitted_date ','$admitted_time', '$ward_no ','$bed_id');";
            if(mysqli_query($conn, $sql)){
                header("Location: ../view/view.php");

        }
        else{   
            echo "Error";

         } 

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

        header("Location: form.php");
    }

}
else { 
    header("Location: /login.php");

    }
