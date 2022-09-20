<?php
// include './config/db.php';


    include("./template/header.php");
    ?>

<center>
    <?php if(check_role() == 1 || check_role() == 4){
        ?>
    <a href="op/doctor/view/view.php" >Doctor</a>
    <?php
    }
    ?>
    <br>
    <?php if(check_role() == 1 || check_role() == 4){
        ?>
    <a href="op/nurse/view/view.php" >Nurse</a>
    <?php
    }
    ?>
    <br>
    <?php if(check_role() == 1 || check_role() == 4){
        ?>
    <a href="op/patient/view/view.php" >Patient</a>
    <?php
    }
    ?>
</center>



    <?php 
    include("./template/footer.php");





?>