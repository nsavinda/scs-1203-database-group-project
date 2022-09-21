<?php  
      include("../../../template/header.php");
      include("../../../permission/patient.php");
include "../../../config/db.php";

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if(isset($_GET['id']) && !empty($_GET['id'])){

    $sql = "DELETE FROM patient WHERE patient_id = '{$_GET['id']}';";
    $conn = mysqli_connect($hostname, $username, $password, $db_name);
    if(mysqli_query($conn, $sql)){
        echo 'success';
        header("Location: ../view/view.php");
    }
    else{
        echo 'invalid id';
    }
    }
}