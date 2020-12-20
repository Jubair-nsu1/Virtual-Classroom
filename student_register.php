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

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="landingpage.php">
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
                        <a class="nav-link page-scroll" href="landingpage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="student_login.php">Student Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="Faculty_login.php">Faculty Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<!--End of  header-->

</br></br></br></br></br></br>
<!--Faculty Registration-->
<section class="py-7 py-md-0 bg-hero" id="faculty_register">
  	<div class="container">
  		<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-6">
  		<h3 class="h3_txt"><center>  		Register As Student	</center></h3>

  		<form action="function.php" method="post">

  			<div class="form-row">
        <input type="text" name="name" class="form-control custom_form" placeholder="Name"  required>
        </div>

        <div class="form-row">
        <input type="phone" name="phno" class="form-control custom_form" placeholder="Phone"  required>
        </div>

        <div class="form-row">
          <input type="username" name="username" class="form-control custom_form" placeholder="Username" required >
        </div>

        <div class="form-row">
          <input type="Password" name="password" class="form-control custom_form" placeholder="Password"  required >
        </div>

  	    <center><input type="submit" name="student_register" class="btn btn-primary" value="Register"  <br></center>
      </form>
  	  </div>
  		<div class="col-md-3"></div>

  		</div>
  	</div>
  </section>




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
