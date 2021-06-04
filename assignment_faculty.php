<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>Assignments</title>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 3px solid green;
  background-color: #f1f1f1;
  width: 20%;
  height: 500px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: red;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: blue;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 3px solid green;
  width: 80%;
  border-left: none;
  height: 500px;
}

}
</style>

</head>


<body>

  <?php
      include_once 'dbConnection.php';
      session_start();
      if (!(isset($_SESSION['username'])) && $_SESSION["key"] = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
          session_destroy();
          header("location:landingpage.php");
      } else {
          $name     = $_SESSION['name'];
          $username = $_SESSION['username'];
          $facultyLoggedIn = $_SESSION['username'];

          include_once 'dbConnection.php';
          echo '<center><a href="dash.php?q=7" >Go Back</button></a></center>';
      }

      $topic = $_GET['topic'];

      $sql = "Select description,date,time,filename,data From Assignment WHERE topic='$topic' ";

      $resultset = mysqli_query($con, $sql);
      while( $row = mysqli_fetch_assoc($resultset) ) {
        $description = $row['description'];
        $date = $row['date'];
        $time = $row['time'];
        $filename = $row['filename'];
        $data = $row['data'];

  ?>

<h1 style="color: lightgreen"><?php echo $topic ?></h1>
</br>
<p style="color:orange">Description: <?php echo $description?></p>
<p style="color:red">Date: <?php echo $date?></p>
<p style="color:red">Time: <?php echo $time?></p>
</br>

<?php } ?>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Update</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Submissions</button>
</div>

<div id="London" class="tabcontent">
  <center><h3 style="color: yellow">Update Assignment</h3></center>
  </br>

  <form class="row g-3 needs-validation" novalidate>

  <div class="col-md-10">
    <label for="validationCustom01" class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
  </div>

  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Time</label>
    <input type="time" class="form-control" required>
  </div>

  <div class="col-md-5">
    <label for="validationCustom05" class="form-label">Date</label>
    <input type="date" class="form-control" required>
  </div>

  <div class="col-12">
  </br>
    <button class="btn btn-primary" type="submit">Update</button>
  </div>

</form>


</div>

<div id="Paris" class="tabcontent">
  <center><h3 style="color: yellow">Submissions</h3></center>
</br></br>
  <div class="panel">
  <table class="table table-striped title1" >

  <tr style="color:red">
      <th style="vertical-align:middle">No.</th>
      <th style="vertical-align:middle">Name</th>
      <th style="vertical-align:middle">Time</th>
      <th style="vertical-align:middle">Submission</th>
      <th style="vertical-align:middle">Comment</th>
  </tr>

  <?php
  include_once 'dbConnection.php';
  $sql = "Select sid,time,file,message From assign_submission WHERE assign_name='$topic'";

  $c=1;

  $resultset = mysqli_query($con, $sql);
  while( $row = mysqli_fetch_array($resultset) ) {
    $sid = $row['sid'];
    $comment = $row['message'];
    $time = $row['time'];
    $file = $row['file'];
   ?>



   <tr>
       <td style="color:green"><?php echo $c ?></td>
       <td style="vertical-align:middle"><?php echo $sid ?></td>
       <td style="vertical-align:middle"><?php echo $time ?></td>
       <td style="vertical-align:middle">
         Download

       </td>


       <td style="vertical-align:middle"><?php echo $comment ?></td>
   </tr>



<?php
$c++;
}
 ?>

</div>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
