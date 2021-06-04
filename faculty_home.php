<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['username'])) && $_SESSION["key"] = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
    session_destroy();
    header("location:landingpage.php");
} else {
    $name     = $_SESSION['name'];
    $facultyLoggedIn = $_SESSION['username'];

    include_once 'dbConnection.php';
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a></span>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Virtual Classroom</title>


    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="css2/default.css" id="theme-color">
</head>


<body>

<!--navigation Bar-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="#">
                Virtual Classroom
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#" data-toggle="modal" data-target="#create_class">Create Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<!--End of navigation Bar-->


</br></br></br></br></br></br>



<!--Creating Class-->
<div class="modal fade" id="create_class">
<div class="modal-dialog">
 <div class="modal-content">
   <div class="modal-header">
     <center><h3 class="modal-title"><span style="color:darkblue;font-size:16px;font-weight: bold">Create Class</span></h3></center>
     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancel</span></button>
   </div>
   <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <form role="form" method="post" action="function.php">
    <div class="form-group">
      <input type="text" name="name" maxlength="20"  placeholder="Class Name" class="form-control" required>
    </div>
    <div class="form-group">
      <input type="text" name="section" maxlength="20"  placeholder="Section" class="form-control">
    </div>
    <div class="form-group">
      <input type="text" name="subject" maxlength="30" placeholder="Subject" class="form-control">
    </div>
    <div class="form-group" align="center">
      <input type="submit" name="create_class" value="Create" class="btn btn-primary" >
    </div>
  </form>
</div><div class="col-md-3"></div></div>

   </div>
 </div>
</div>
</div>
<!--End of Creating Class-->


<!-- Form to enter classes-->

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <h3 class="h3_txt"><center>  		Enter Class using Class Code </center></h3>
  <form role="form" method="post" action="function.php">

    <div class="form-group">
      <input type="text" name="class_code" maxlength="20"  placeholder="Enter Class Code" class="form-control">
    </div>

    <div class="form-group" align="center">
      <input type="submit" name="enter_class_faculty" value="Enter Class" class="btn btn-primary" >
    </div>
  </form>
</div><div class="col-md-3"></div></div>

<!-- Form to enter classes-->
</br></br></br></br></br>



<!--Creating Class List-->
<?php
include_once("dbConnection.php");
$sql = "Select name,section,class_code From class WHERE fid='$facultyLoggedIn'";

$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>

<form role="form" >
<div class="row vh-md-50">
<div class="col-md-4 col-sm-10 col-12 mx-auto my-auto text-center">
<div class="card hovercard">

<div class="cardheader"></div>
<div class="card-body info">

<div class="title">
<a href="#"><h3><?php echo $record['name']; ?></h3></a></br>
<a href="#"><h6>Section :  <?php echo $record['section']; ?></h6></a>
<a href="#"><h9>Code :  <?php echo $record['class_code']; ?></h9></a>
</div>

</div>

<!--
<div class="card-footer bottom">
    <input type="submit" name="enter_class_faculty" value="Enter" class="btn btn-primary" >
</div>
-->

</div>
</div>
</div>
</form>
</br></br>
<?php } ?>
<!--End of Creating Class List-->



<!--scroll to top-->
<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
