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
  $query = "select name From admin Where username='$username' And password='$password'";
  $result =mysqli_query($conn,$query) or die('Error');
  $count = mysqli_num_rows($result);

  if($count==1){
    while ($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
    }
    $_SESSION["name"]     = $name;
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
  $result =mysqli_query($conn,$query);

  if($result){
    echo "<script>window.open('faculty_home.php','_self')</script>";
  }
}



if (isset($_POST['enter_class'])) {
  session_start();
  if (isset($_SESSION["class_code"])) {
      session_destroy();
  }

    header("location:dash.php");


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
