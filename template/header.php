<?php
// include './config/db.php';
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['id']) ) { 
    $username = $_SESSION['username'];

    ?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="#about"><?=$username?></a></li>
</ul>




<?php

}else{

    header("Location: login.php");

}
 ?>







