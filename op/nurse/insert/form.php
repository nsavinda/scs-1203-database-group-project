<?php


    include("../../../template/header.php");


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
  background-color: #1E5162;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #ADD8E6;
  color: #1E5162;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
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
h1{
  padding-left:12px;
}
#but{
  padding-right:10%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>



<h1>Nurses</h1>

<div class="container">
  <form action="insert.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Name..">
    </div>
  </div>
  <div class="row">
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
  </div>

  <div class="row">
    <div class="col-25">
      <label for="joined_date">Joined date</label>
    </div>
    <div class="col-75">
      <input type="date" id="joined_date" name="jdate" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="resign_date">Resign date</label>
    </div>
    <div class="col-75">
      <input type="date" id="resign_date" name="rdate" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dea">DEA number</label>
    </div>
    <div class="col-75">
      <input type="text" id="dea" name="dea" placeholder="DEA number..">
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







<?



include("../../../template/footer.php");




?>