<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

   <title> Faculty || Classroom</title>
   <link  rel="stylesheet" href="css/bootstrap.min.css"/>
   <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
   <link rel="stylesheet" href="css/main.css">
   <link  rel="stylesheet" href="css/font.css">
   <script src="js/jquery.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js"  type="text/javascript"></script>
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->

<!-- End of Bootstrap -->

<!-- Morris Chart Library -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- End of Morris Chart Library-->

<!-- Button-->
<style>
.button {
  border-radius: 15px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 24px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 20px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


<!--  tab view-->
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 3px solid blue;
  background-color: yellow;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: red;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: blue;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 3px solid blue;
  border-top: none;
}


</style>




<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
 });

</script>


</head>

<body  style="background:#eee;">
<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Classroom</span></div>

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
    echo '<span class="pull-right top title1" ><span style="color:white"></span><a href="faculty_home.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Main Menu</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>';
}

?>


</div></div>
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Faculty's Portal</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
if (@$_GET['q'] == 0)
    echo 'class="active"';
?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?>><a href="dash.php?q=1">Students</a></li>
    <li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="dash.php?q=2">Class Performance</a></li>
    <li <?php
if (@$_GET['q'] == 3)
echo 'class="active"';
?>><a href="dash.php?q=3">Quiz Marks</a></li>
    <li <?php
if (@$_GET['q'] == 4)
    echo 'class="active"';
?>><a href="dash.php?q=4">Add Written Exam</a></li>
        <li <?php
if (@$_GET['q'] == 5)
    echo 'class="active"';
?>><a href="dash.php?q=5">Add MCQ Exam</a></li>
        <li <?php
if (@$_GET['q'] == 6)
    echo 'class="active"';
?>><a href="dash.php?q=6">Remove Exam</a></li>
        <li <?php
if (@$_GET['q'] == 7)
    echo 'class="active"';
?>><a href="dash.php?q=7">Assignment</a></li>
        <li <?php
if (@$_GET['q'] == 8)
    echo 'class="active"';
?>><a href="dash.php?q=8">Discussion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">
<?php


if (@$_GET['q'] == 0) {

    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
    echo '<div class="panel"><table class="table table-striped title1"  style="vertical-align:middle">
    <tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Status</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        $status  = $row['status'];
        if ($status == "enabled") {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td><td style="vertical-align:middle">Enabled</td>
  <td style="vertical-align:middle"><b><a href="update.php?deidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;<span><b>Disable</b></span></a></b></td></tr>';
        } else {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td><td style="vertical-align:middle">Disabled</td>
  <td style="vertical-align:middle"><b><a href="update.php?eeidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;<span><b>Enable</b></span></a></b></td></tr>';

        }
    }
}


if (@$_GET['q'] == 1) {

  echo 'Show number of Students';


/*
    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
    echo '<h1><center>Students</center></h1><div class="panel"><table class="table table-striped title1">
    <tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Username</b></td><td style="vertical-align:middle"><b>Phno</b></td><td style="vertical-align:middle"></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $name      = $row['name'];
        $phno      = $row['phno'];
        $username1 = $row['username'];

        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle">' . $phno . '</td>
   <td style="vertical-align:middle"><a title="Delete User" href="update.php?dusername=' . $username1 . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
    }
    $c = 0;
    echo '</table></div>';
*/
}


if (@$_GET['q'] == 2) {
// echo '<button type="button" class="btn btn-info">Download Result as PDF</button>';

    if(isset($_GET['show'])){
        $show = $_GET['show'];
        $showfrom = (($show-1)*10) + 1;
        $showtill = $showfrom + 9;
    }
    else{
        $show = 1;
        $showfrom = 1;
        $showtill = 10;
    }

    $q = mysqli_query($con, "SELECT * FROM rank") or die('Error223');
    echo '<h1><center>Class Performance</center></h1><div class="panel title">
    <table class="table table-striped title1" >
    <tr><td style="vertical-align:middle"><b>Rank</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Username</b></td><td style="vertical-align:middle"><b>Total Marks</b></td></tr>';
    $c = $showfrom-1;
    $total = mysqli_num_rows($q);
    if($total >= $showfrom){
        $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC, time ASC LIMIT ".($showfrom-1).",10") or die('Error223');
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['username'];
            $s = $row['score'];
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE username='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name     = $row['name'];
                $username = $row['username'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $username . '</td><td style="vertical-align:middle">' . $s . '</td><td style="vertical-align:middle">';
        }
    }
    else{

    }
    echo '</table></div>';
    echo '<div class="panel title"><table class="table table-striped title1" ><tr>';
    $total = round($total/10) + 1;
    if(isset($_GET['show'])){
        $show = $_GET['show'];
    }
    else{
        $show = 1;
    }
    if($show == 1 && $total==1){
    }
    else if($show == 1 && $total!=1){
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    else if($show != 1 && $show==$total){
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
    }
    else{
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    echo '</tr></table></div>';


    $query = "Select * FROM Rank";
    $result = mysqli_query($con, $query) or die('Error');
    $chart_data = '';
    while($row = mysqli_fetch_array($result))
    {
     $chart_data .= "{ username:'".$row["username"]."', score:".$row["score"]."}, ";
    }
    $chart_data = substr($chart_data, 0, -2);

    echo '
      <h1><center>Analytics</center></h1>
      </br>
      <div class="container" style="width:950px;">
         <h5>Marks</h5>
         <div id="chart"></div>
      </div>
      <h5><center>Students</center></h5>
      </br></br></br></br></br></br></br></br>
    ';
}



if (@$_GET['q'] == 3) {

// Dropdown Menu of Quiz
echo '
  <h1><center>Quiz Marks</center></h1>
  </br>

  <form method="POST">
  <select name="Quiz">
  <option selected >-Select Quiz-</option>
';


// End of Dropdown Menu of Quiz
  $quizName = "60052d7984ea6";
  $query = "Select title From Quiz";
  $sql =mysqli_query($con,$query) or die('Error');
  $count1 = mysqli_num_rows($sql);
  if($count1=1){
    while ($row = mysqli_fetch_array($sql)) {
      //    $title = $row['title'];
    }
  }


  echo '
  <option value="60052d7984ea6">Math Test-1</option>
  <option value="6018f3cac9835">Math Test-5</option>
  </select>
  <input type="submit" name="search" value="GO" />
  </form>
  ';

  if (isset($_POST['search']))
  {
    $quizName = $_POST['Quiz'];
  }

// Download Button
  echo '
    <center>
    <form method="post" action="function.php" style="float:right;">
        <input type="submit" name="export_marks" class="btn btn-primary" value="Download Marks" />
    </form>
    </center>
    </br>
  ';
// End of Download Button


  echo '
  <div class="panel">
  <table id="tbMarks" class="table table-striped title1" >

  <tr>
      <th style="vertical-align:middle">No.</th>
      <th style="vertical-align:middle">Exam Date & Time</th>
      <th style="vertical-align:middle">Quiz</th>
      <th style="vertical-align:middle">Name</th>
      <th style="vertical-align:middle">Username</th>
      <th style="vertical-align:middle">Marks</th>
  </tr>
  ';

  $c=1;
  $chart_data = '';

  $query = "Select username,eid,score,date From History WHERE eid='$quizName'";
  $sql =mysqli_query($con,$query) or die('Error');
  $count1 = mysqli_num_rows($sql);
  if($count1=1){
    while ($row = mysqli_fetch_array($sql)) {
          $username = $row['username'];
          $eid = $row['eid'];
          $score = $row['score'];
          $date = $row['date'];

          $query2 = "Select title From quiz Where  eid='$eid' ";
          $sql2 =mysqli_query($con,$query2) or die('Error');
          $count2 = mysqli_num_rows($sql2);
          if($count2=1){
            while ($row = mysqli_fetch_array($sql2)) {
                  $quiz = $row['title'];
            }
          }

          $query3 = "Select name From user Where  username='$username'";
          $sql3 =mysqli_query($con,$query3) or die('Error');
          $count3 = mysqli_num_rows($sql3);
          if($count3=1){
            while ($row = mysqli_fetch_array($sql3)) {
                  $name = $row['name'];
                  $chart_data .= "{ username:'".$name."', score:".$score."}, ";
            }
          }

          echo '
          <tr>
              <td style="color:#99cc32"><b>' . $c++ . '</b></td>
              <td style="vertical-align:middle">' . $date . '</td>
              <td style="vertical-align:middle">' . $quiz . '</td>
              <td style="vertical-align:middle">' . $name . '</td>
              <td style="vertical-align:middle">' . $username . '</td>
              <td style="vertical-align:middle">' . $score . '</td>
              <td style="vertical-align:middle"></td>
          </tr>
          ';
    }
    $c=0;
  }


  $chart_data = substr($chart_data, 0, -2);
  echo '
    <h3><center>Results of '.$quiz.'</center></h3>
    <div class="container" style="width:950px;">
       <h5>Marks</h5>
       <div id="chart"></div>
    </div>
    <h5><center>Students</center></h5>
    </br></br></br></br>
  ';


}




if (@$_GET['q'] == 4) {
    echo 'Written Exam Section';
}



if (@$_GET['q'] == 5 && !(@$_GET['step'])) {
    echo '
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">

  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
}



if (@$_GET['q'] == 5 && (@$_GET['step']) == 2) {
    echo '
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST">
<fieldset>
';

    for ($i = 1; $i <= @$_GET['n']; $i++) {
        echo '<b>Question number&nbsp;' . $i . '&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns' . $i . ' "></label>
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Write question number ' . $i . ' here..."></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '1"></label>
  <div class="col-md-12">
  <input id="' . $i . '1" name="' . $i . '1" placeholder="Enter option a" class="form-control input-md" type="text">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '2"></label>
  <div class="col-md-12">
  <input id="' . $i . '2" name="' . $i . '2" placeholder="Enter option b" class="form-control input-md" type="text">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '3"></label>
  <div class="col-md-12">
  <input id="' . $i . '3" name="' . $i . '3" placeholder="Enter option c" class="form-control input-md" type="text">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '4"></label>
  <div class="col-md-12">
  <input id="' . $i . '4" name="' . $i . '4" placeholder="Enter option d" class="form-control input-md" type="text">

  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans' . $i . '" name="ans' . $i . '" placeholder="Choose correct answer " class="form-control input-md" >
   <option value="a">Select answer for question ' . $i . '</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />';
    }

    echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
}



if (@$_GET['q'] == 6) {

    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
    echo '<div class="panel"><table class="table table-striped title1">
    <tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Topic</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
  <td style="vertical-align:middle"><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
    }
    $c = 0;
    echo '</table></div>';
}



#------------------------------ Assignment ---------------------------------------------------


if (@$_GET['q'] == 7) {

?>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'create')">Create Assignments</button>
  <button class="tablinks" onclick="openCity(event, 'view')">View Assignment</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Other</button>
</div>

<?php
echo '
<div id="create" class="tabcontent">

<h1><center>Create Assignment</center></h1>
</br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

  <form class="form-horizontal title1" action="function.php"  method="POST" enctype="multipart/form-data">

  <h3><center>Topic</center></h3>
  <div class="form-group">
    <label class="col-md-12 control-label" for="name"></label>
    <div class="col-md-12">
      <input type="text" class="form-control" name="topic" placeholder="Enter Topic">
    </div>
  </div></br>

  <h3><center>Instruction/Description</center></h3>
    <div class="form-group">
      <label class="col-md-12 control-label" for="name"></label>
      <div class="col-md-12">
        <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
      </div>
    </div></br>

  <h3><center>Set Deadline</center></h3>

    <div class="form-group">
        <input type="date" class="form-control " name="date" placeholder="mm/dd/yyyy">
    </div></br>

    <div class="form-group">
        <input type="time" class="form-control " name="time" placeholder="12:00AM">
    </div></br>

    <div class="form-group">
        <div class="container">
          <label class="col-md-12 control-label" for="name"></label>
          <div class="col-md-12">
            <input type="file" name="file" style="margin-left:12%;background:orange;color:white" class="btn btn-primary stretched-link" >
          </div>
        </div>
        <h5><center>Note: File should be less than 1Mb</center></h5>
    </div></br></br></br>


    <div class="form-group">
      <label class="col-md-12 control-label" for="name"></label>
      <div class="col-md-12">
        <input  type="submit" name="upload_Assignemnt" style="margin-left:45%;background:darkblue;color:white" class="btn btn-primary stretched-link" value="Submit" />
      </div>
    </div>
    </br></br></br></br></br></br></br></br></br>

  </form>
</div>
</div>

</div>
';



?>


<div id="view" class="tabcontent">
<?php
  $sql = "Select topic From Assignment WHERE fid='$facultyLoggedIn'";
  $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
  while( $record = mysqli_fetch_assoc($resultset) ) {
    $topic = $record['topic'];
?>

  <button class="button"><span><a href="assignment_faculty.php?topic=<?php echo $record['topic']; ?> ">  <?php echo $topic ?> </a></span></button>
<?php

}

/*
$id = $_GET['topic'];
if (@$_GET[topic] >0 ) {
//  $topic = @$_GET['topic'];
  echo "<script>alert('Works Successfully')</script>";
  header("location:dash.php");
}
*/

?>



</div>



<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>



<?php

$result = mysqli_query($con, "SELECT * FROM Assignment") or die('Error');

while ($row = mysqli_fetch_array($result)) {
    $topic   = $row['topic'];
    $filename   = $row['filename'];
    $data = $row['data'];

//    echo '


//    ';


}



}


if (@$_GET['q'] == 8) {
  echo 'Discussion';
}

?>
</div>
</div>
</div>


<!-- JS and jQuery -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
   <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/jquery.min.js"></script>
   <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/bootstrap-material-design.min.js"></script>
   <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/moment.min.js"></script>
   <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
   <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>

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
   </script>

</body>
</html>


<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'username',
 ykeys:['score'],
 labels:['Score'],
 hideHover:'auto',
});
</script>
