<<?php

$conn =mysqli_connect("localhost", "root","","quiz");



if (isset($_POST['faculty_login'])) {
  session_start();
  if (isset($_SESSION["username"])) {
      session_destroy();
  }
  $ref      = @$_GET['q'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = stripslashes($username);
  $username = addslashes($username);
  $password = stripslashes($password);
  $password = addslashes($password);

  $query = "select name From admin Where username='$username' And password='$password'";
  $result =mysqli_query($conn,$query) or die('Error');
  $count = mysqli_num_rows($result);

  if($count==1){
    while ($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
    }
    $_SESSION["name"]     = $name;
    $_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
    $_SESSION["username"] = $username;
    header("location:faculty_home.php");
  }
  else{
    echo "<script>alert('Error login')</script>";
    echo "<script>window.open('faculty_login.php','_self')</script>";
  }
}




if (isset($_POST['student_login'])) {
  session_start();
  if (isset($_SESSION["username"])) {
      session_destroy();
  }
  $ref      = @$_GET['q'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select name From user Where username='$username' And password='$password'";
  $result =mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);

  if($count==1){
    while ($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
    }
    $_SESSION["name"]     = $name;
    $_SESSION["username"] = $username;
    header("location:student_home.php");
  }
  else {
    echo "<script>alert('Error login')</script>";
    echo "<script>window.open('student_login.php','_self')</script>";
  }
}




if (isset($_POST['faculty_register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "Insert Into admin(name, username, password) Values('$name','$username','$password')";
  $result = mysqli_query($conn,$query);

 if($result){
  echo "<script>alert('Registered Successfully')</script>";
  echo "<script>window.open('landingpage.php','_self')</script>";
  }
}



if (isset($_POST['student_register'])) {
  $name = $_POST['name'];
  $phno = $_POST['phno'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "Insert Into user(name, phno, username, password) Values('$name','$phno','$username','$password')";
  $result = mysqli_query($conn,$query);

  if($result){
    echo "<script>alert('Registered Successfully')</script>";
    echo "<script>window.open('landingpage.php','_self')</script>";
  }
}




if (isset($_POST['create_class'])) {
  session_start();
  if (!(isset($_SESSION['username']))) {
      session_destroy();
      header("location:landingpage.php");
  }

  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
  return $random_string;
  }

  $name = $_POST['name'];
  $section = $_POST['section'];
  $subject = $_POST['subject'];
  $fid = $_SESSION['username'];
  $code = generate_string($permitted_chars, 8);

  $query = "Insert Into class(name, section, subject,fid,class_code) Values('$name','$section','$subject','$fid','$code')";
  $result = mysqli_query($conn,$query);

  if($result){
    echo "<script>window.open('faculty_home.php','_self')</script>";
  }
}




// Faculty Entering Class
if (isset($_POST['enter_class_faculty'])) {


    header("location:dash.php");


}





// Student Entering Class
if (isset($_POST['enter_class_student'])) {
  session_start();
  if (isset($_SESSION["class_code"])) {
      session_destroy();
  }
    header("location:account.php?q=1");

}



// Student Joining to a Classroom using Class Code
if (isset($_POST['join_class'])) {
  session_start();
  if (!(isset($_SESSION['username']))) {
      session_destroy();
      header("location:landingpage.php");
  }

  $code = $_POST['class_code'];
  $sid  = $_SESSION['username'];

  $query = "Select name,section From class Where class_code='$code'";
  $sql =mysqli_query($conn,$query) or die('Error');
  $count = mysqli_num_rows($sql);
  if($count=1){
    while ($row = mysqli_fetch_array($sql)) {
          $name = $row['name'];
          $sec = $row['section'];
    }
  }

  $query = "Select name,section,fid From class Where class_code='$code'";
  $sql =mysqli_query($conn,$query) or die('Error');
  $count = mysqli_num_rows($sql);
  if($count=1){
    while ($row = mysqli_fetch_array($sql)) {
          $name = $row['name'];
          $sec = $row['section'];
          $fid = $row['fid'];
    }
    $q = "Select name From admin Where username='$fid'";
    $sql2 =mysqli_query($conn,$q) or die('Error');
    $c = mysqli_num_rows($sql2);
    if($c=1){
      while ($row = mysqli_fetch_array($sql2)) {
            $fname = $row['name'];

      }
    }
  }

  $insert = "Insert Into enrolment(class_code,sid,class_name,section,fname) Values('$code','$sid','$name','$sec','$fname')";
  $result = mysqli_query($conn,$insert) or die('Error');

  if($result){
    echo "<script>alert('Joined Class Successfully')</script>";
    echo "<script>window.open('student_home.php','_self')</script>";
  }
}



// Download Marks as CSV
if(isset($_POST["export_marks"]))
{
  $output = '';
  $c=1;

  $query = "Select username,eid,score,date From History ";
  $sql =mysqli_query($conn,$query) or die('Error');
  $count1 = mysqli_num_rows($sql);
  if($count1=1){

    $output .= '
     <table class="table" bordered="1">
                      <tr>
                           <th>No.</th>
                           <th>Exam Date</th>
                           <th>Quiz</th>
                           <th>Name</th>
                           <th>Username</th>
                           <th>Marks</th>
                      </tr>
    ';

    while ($row = mysqli_fetch_array($sql)) {
          $username = $row['username'];
          $eid = $row['eid'];
          $score = $row['score'];
          $date = $row['date'];

          $query2 = "Select title From quiz Where  eid='$eid'";
          $sql2 =mysqli_query($conn,$query2) or die('Error');
          $count2 = mysqli_num_rows($sql2);
          if($count2=1){
            while ($row = mysqli_fetch_array($sql2)) {
                  $quiz = $row['title'];
            }
          }

          $query3 = "Select name From user Where  username='$username'";
          $sql3 =mysqli_query($conn,$query3) or die('Error');
          $count3 = mysqli_num_rows($sql3);

          if($count3=1){
            while ($row = mysqli_fetch_array($sql3)) {
                  $name = $row['name'];
            }
          }

          $output .= '
          <tr>
                  <td>'.$c++ .'</td>
                  <td>'.$date.'</td>
                  <td>'.$quiz.'</td>
                  <td>'.$name.'</td>
                  <td>'.$username.'</td>
                  <td>'.$score.'</td>
          </tr>
          ';

      }//end of whileloop
      $c=0;

      $output .= '</table>';
      header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=Quiz_Marks.xls');
      echo $output;
  }//end of if-Statement

}



if(isset($_POST["upload_Assignemnt"])){
  session_start();



  $fid = $_SESSION['username'];
  $topic = $_POST['topic'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $path = "files/".$fileName;

  $data = file_get_contents($file);
  $data = base64_encode($data);

  $query = "Insert Into Assignment(fid, topic, description, date, time, filename) Values('$fid','$topic','$description','$date', '$time','$fileName')";
  $result = mysqli_query($conn,$query);


  if($result){
    move_uploaded_file($fileTmpName,$path);
    echo "<script>alert('Assignment Posted Successfully')</script>";
    echo "<script>window.open('dash.php?q=7','_self')</script>";
  }

}


if (isset($_POST['assignment_submit'])) {
  session_start();
  $sid = $_SESSION['username'];

  $comment = $_POST['comment'];


  $query = "Insert Into assign_submission(fid,sid) Values('$comment','$sid')";
  $result = mysqli_query($conn,$query);

  if($result){
    echo "<script>alert('Submitted Successfully')</script>";
    echo "<script>window.open('account.php?q=4','_self')</script>";
  }


}




/*
function get_class(){
  session_start();
  if (!(isset($_SESSION['username']))) {
      session_destroy();
      header("location:landingpage.php");
  }
  else{
    $facultyLoggedIn = $_SESSION['username'];
  }

  global $conn;
  $query = "Select name,section From class WHERE username='$facultyLoggedIn'";
  $result =mysqli_query($conn,$query);

  while($row=mysqli_fetch_array($result)){
    $name = $row['name'];
    $section = $row['section'];

    echo'
    <tr>
    <div class="container">
      <div class="card" style="width:300px">
        <div class="card-body">
            <h4 class="card-title"><td>'. $name .'</td><></h4>
            <h1 class="card-title"><td>'. $section .'</td></h1>
            <a href="dash.php" class="btn btn-primary stretched-link">Go</a>
        </div>
      </div>
    </div>
    </tr>
    ';
  }
}
*/


?>
