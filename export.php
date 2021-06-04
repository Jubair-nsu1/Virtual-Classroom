<?php
//export.php
$connect = mysqli_connect("localhost", "root", "", "quiz");

if(isset($_POST["export_marks"]))
{
  $output = '';
  $c=1;

  $query = "Select username,eid,score,date From History ";
  $sql =mysqli_query($connect,$query) or die('Error');
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
          $sql2 =mysqli_query($connect,$query2) or die('Error');
          $count2 = mysqli_num_rows($sql2);
          if($count2=1){
            while ($row = mysqli_fetch_array($sql2)) {
                  $quiz = $row['title'];
            }
          }

          $query3 = "Select name From user Where  username='$username'";
          $sql3 =mysqli_query($connect,$query3) or die('Error');
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
?>
