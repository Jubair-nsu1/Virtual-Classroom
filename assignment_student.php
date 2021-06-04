<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

     <!-- Main CSS-->
     <link href="css/main2.css" rel="stylesheet" media="all">

  </head>
  <body>

  <?php
    include_once 'dbConnection.php';
    session_start();
    if (!(isset($_SESSION['username']))) {
        header("location:landingpage.php");
    } else {
        $name     = $_SESSION['name'];
        $sid = $_SESSION['username'];

  //      include_once 'dbConnection.php';
  //      echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a></span>';
    }

    $id = $_GET['topic'];

    $sql = "Select fid,description,date,time,filename,data From Assignment WHERE topic='$id' ";

    $resultset = mysqli_query($con, $sql);
    while( $row = mysqli_fetch_assoc($resultset) ) {
      $fid = $row['fid'];
      $description = $row['description'];
      $date = $row['date'];
      $time = $row['time'];
      $filename = $row['filename'];
      $data = $row['data'];
  ?>

    <div class="wrapper wrapper--w900">
        <div class="card card-6">
          <form role="form" method="post" action="assignment_student.php" enctype="multipart/form-data">


            <div class="form-row">
              <div class="card-heading">
                  <h2 class="title" style="color:blue" id="topic"><?php echo $id ?></h2>
              </div>
            </div>

            <div class="card-body">
                    <div class="form-row">
                        <div class="name">Faculty</div>
                        <div class="input">
                            <input type="text" style="color:yellow" name="fid" value="<?php echo $fid ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Description</div>
                        <div class="input"  >
                            <h5 name="desc"><?php echo $description ?></h5>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Deadline</div>
                        <div class="value">
                            <div class="input-group">
                                <h5><?php echo $date ?>  <?php echo $time ?></h5>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">View Materials:</div>
                        <div class="value">
                            <div class="input-group">
                            <?php

                            $query2 = "SELECT filename FROM Assignment WHERE topic='$id' ";
                            $run2 = mysqli_query($con,$query2);

                            while($rows = mysqli_fetch_assoc($run2)){
                                ?>
                            <a href="download.php?file=<?php echo $rows['filename'] ?>">Download File</a><br>
                            <?php
                            }
                            ?>

                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Comment</div>
                        <div class="value">
                            <input type="text" name="comment" maxlength="50"  placeholder="Write any comment" class="form-control">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Upload Files</div>
                        <div class="value">

                            <div class="input-group js-input-file">
                                <input type="file" name="file" style="margin-left:12%;background:orange;color:white" class="btn btn-primary stretched-link" >
                            </div>

                            <div class="label--desc">Max file size 1 MB</div>
                        </div>
                        <input type="text" style="color:red" name="topic" value="<?php echo $id ?>">
                    </div>

            </div>

            <div class="card-footer">
                <input type="submit" name="assignment_submit" value="Submit Assignment" class="btn btn--radius-2 btn--blue-2" >
            </div>

            </form>
        </div>
    </div>

<?php
}

if (isset($_POST['assignment_submit'])) {

  $fid = $_POST['fid'];
  $name = $_POST['topic'];
  $comment = $_POST['comment'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;



  $query = "Insert Into assign_submission(fid,sid,assign_name,message,file,turnin) Values('$fid','$sid','$name','$comment','$fileName','Submitted')";
  $result = mysqli_query($con,$query);

  if($result){
    move_uploaded_file($fileTmpName,$path);
    echo "<script>alert('Submitted Successfully')</script>";
    echo "<script>window.open('account.php?q=4','_self')</script>";
  }


}

?>

  </body>
</html>
