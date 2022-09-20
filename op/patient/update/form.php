<?php
      include("../../../template/header.php");
      include "../../../config/db.php";

      if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];


    if(isset($_GET['id']) ){
      $id = $_GET['id'];
   
      
      $conn = mysqli_connect($hostname, $username, $password, $db_name);
      $sql = "SELECT name,admitted_date,admitted_time,ward_no,bed_id FROM patient WHERE patient_id = $id ;";
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



<h1>Patients</h1>

<div class="container">
  <form action="update.php" method="POST">
  <input type="hidden" id="id" name="id" value="<?=$id?>">

  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Name.." value="<?=$row['name']?>" >
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Address..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile number</label>
    </div>
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Mobile number..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="council">Medical council registration number</label>
    </div>
    <div class="col-75">
      <input type="text" id="council" name="council" placeholder="Medical council registration number..">
    </div>
  </div> -->

  <div class="row">
    <div class="col-25">
      <label for="admitted_date">Admitted date</label>
    </div>
    <div class="col-75">
      <input type="date" id="admitted_date" name="admitted_date" value="<?=$row['admitted_date']?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="resign_date">Admitted time</label>
    </div>
    <div class="col-75">
      <input type="time" id="resign_date" name="admitted_time" value="<?=$row['admitted_time']?>">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dea">Ward no</label>
    </div>
    <div class="col-75">
      <input type="text" id="ward_no" name="ward_no" placeholder="Ward no"  value="<?=$row['ward_no']?>" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dea">Bed no</label>
    </div>
    <div class="col-75">
      <input type="text" id="Bed_no" name="bed_id" placeholder="bed no" value="<?=$row['bed_id'] ?>">
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
  <div class="row" id="but">
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