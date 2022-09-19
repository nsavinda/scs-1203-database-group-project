<?php


    include("../../../template/header.php");

    include "../../../config/db.php";

    $conn = mysqli_connect($hostname, $username, $password, $db_name);
    $sql = "SELECT patient_id,name , admitted_date , ward_no , bed_id  FROM patient;";
    $result = mysqli_query($conn, $sql);

?>


<style>
#doctor {
  font-family: Arial, Helvetica, sans-serif;
  /* border-collapse: collapse; */
  width: 70%;
  padding-left:20%;
  /* padding-top:5px; */
}
h1{
  
  padding-left:20%;
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
  background-color: #1E5162;
  color: white;
}
a:link {
  color: black;
  text-decoration: none;
}
a:hover {
  color: red;
  text-decoration: underline;
}
#button{
  
  padding-left:20%;
}
button{
  padding-top: 6px;
  padding-bottom: 6px;
  padding-left: 12px;
  padding-right: 12px;
}
</style>


<h1>Patients</h1>

<a href="../insert/form.php"><div id="button"><button>Insert</button></div></a >
<br />
<br />

<table id="doctor">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Admitted date</th>
    <th>Ward no</th>
    <th>Bed no</th>
    <th>Update</th>
    <th>Delete</th>

  </tr>
  <?php 
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['patient_id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['admitted_date']."</td>";
            echo "<td>".$row['ward_no']."</td>";
            echo "<td>".$row['bed_id']."</td>";

            echo "<td><a href='../update/form.php?id=".$row['patient_id']."'>Update</a></td>";
            echo "<td><a href='../delete/delete.php?id=".$row['patient_id']."'>Delete</a></td>";
            echo "</tr>";
        }
    }
  ?>
  











<?php



include("../../../template/footer.php");




?>