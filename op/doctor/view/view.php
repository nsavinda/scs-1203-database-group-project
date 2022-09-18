<?php


    include("../../../template/header.php");

    include "../../../config/db.php";

    $conn = mysqli_connect($hostname, $username, $password, $db_name);
    $sql = "SELECT d.doctor_id,d.dea_no,e.name, e.contact_no FROM doctor d, employee e WHERE d.emp_id = e.emp_id;";
    $result = mysqli_query($conn, $sql);

?>


<style>
#doctor {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#doctor td, #doctor th {
  border: 1px solid #ddd;
  padding: 8px;
}

#doctor tr:nth-child(even){background-color: #f2f2f2;}

#doctor tr:hover {background-color: #ddd;}

#doctor th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>


<h1>Doctors</h1>

<table id="doctor">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>DEA No</th>
    <th>Mobile</th>

  </tr>
  <?php 
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['doctor_id']."</td>";
            echo "<td><a href='doctor.php?doctor_id=".$row['doctor_id']."'>".$row['name']."</a></td>";
            echo "<td>".$row['dea_no']."</td>";
            echo "<td>".$row['contact_no']."</td>";
            echo "</tr>";
        }
    }
  ?>
  











<?php



include("../../../template/footer.php");




?>