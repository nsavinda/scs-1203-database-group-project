<?php  
session_start();
include "../../../config/db.php";

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['council']) && isset($_POST['jdate']) && isset($_POST['rdate']) && isset($_POST['id']) ){

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

	$name = test_input($_POST['name']);
	$address = test_input($_POST['address']);
    $mobile = test_input($_POST['mobile']);
    // $dea = test_input($_POST['dea']);
    $council = test_input($_POST['council']);
    $jdate = $_POST['jdate'];
    $rdate = $_POST['rdate'];
    $id = $_POST['id'];

	if (empty($name) || empty($address) || empty($mobile)) {
		header("Location: ../login.php?error=All data are Required");
	}else {

        $conn = mysqli_connect($hostname, $username, $password, $db_name);
        if($conn){
            // Check connection
            echo "Connected to database";
            $sql = "UPDATE employee SET name='$name', address='$address',contact_no = '$mobile' WHERE emp_id = '$id'";
            $sql1 = "UPDATE medical_staff SET council_regno='$council',joined_date='$jdate', resign_date = '$rdate' WHERE emp_id = '$id'";
            // $sql = "INSERT INTO employee (name, address, contact_no) VALUES ('$name', '$address', '$mobile')";
            if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)){
                echo "Success";
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
