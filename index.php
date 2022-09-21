<?php
// include './config/db.php';


    include("./template/header.php");
    ?>
<style> 
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
</style>
<center>
    <h2>
    <?php if(check_role() == 1 || check_role() == 2){
        ?>
    <a href="op/doctor/view/view.php" > <button class="button">Doctor</button>  </a>
    <?php
    }
    ?>
    <br>
    <?php if(check_role() == 1 || check_role() == 3 || check_role() == 2){
        ?>
    <a href="op/nurse/view/view.php" ><button class="button">Nurse</button></a>
    <?php
    }
    ?>
    <br>
    <?php if(check_role() == 1 || check_role() == 3 || check_role() == 2){
        ?>
    <a href="op/patient/view/view.php" ><button class="button">Patient</button></a>
    <?php
    }
    ?>
    <h2>
</center>



    <?php 
    include("./template/footer.php");





?>