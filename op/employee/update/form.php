<?php
      include("../../../template/header.php");
      include "../../../config/db.php";

      if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];


    if(isset($_GET['id']) ){
      $id = $_GET['id'];
   
      
      $conn = mysqli_connect($hostname, $username, $password, $db_name);
      $sql = "SELECT d.doctor_id,d.dea_no,e.emp_id ,e.name,e.address, e.contact_no, m.council_regno, m.joined_date, m.resign_date FROM doctor d, employee e, medical_staff m WHERE d.doctor_id = $id AND d.emp_id = e.emp_id AND d.emp_id = m.emp_id;";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
           
        
    

?>




<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>



<h2>Employee</h2>

<div class="container">
  <form action="update.php" method="POST">
  <input type="hidden" id="id" name="id" value="<?=$row['emp_id']?>">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Name.." value="<?=$row['name']?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Address.." value="<?=$row['address']?>" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile number</label>
    </div>
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Mobile number.." value="<?=$row['contact_no']?>" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="council">Medical council registration number</label>
    </div>
    <div class="col-75">
      <input type="text" id="council" name="council" placeholder="Medical council registration number.." value="<?=$row['council_regno']?>">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="joined_date">Joined date</label>
    </div>
    <div class="col-75">
      <input type="date" id="joined_date" name="jdate" value="<?=$row['joined_date']?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="resign_date">Resign date</label>
    </div>
    <div class="col-75">
      <input type="date" id="resign_date" name="rdate"  value="<?=$row['resign_date']?>">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dea">DEA number</label>
    </div>
    <div class="col-75">
      <input type="text" id="dea" name="dea" placeholder="DEA number.." value="<?=$row['dea_no']?>" >
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div> -->
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>







<?php



include("../../../template/footer.php");
      }
    }



  }else { 
    header("Location: /login.php");

    }



    ?>