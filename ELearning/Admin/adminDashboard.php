<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
$totalcourse = $result->num_rows;

 $sql = "SELECT * FROM student";
 $result = $conn->query($sql);
 $totalstu = $result->num_rows;

 $sql = "SELECT * FROM courseorder";
 $result = $conn->query($sql);
 $totalsold = $result->num_rows;
?>
  <div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Courses</div>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $totalcourse; ?>
            </h4>
            <a class="btn text-white" href="courses.php">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Students</div>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $totalstu; ?>
            </h4>
            <a class="btn text-white" href="students.php">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
          <div class="card-header">Sold</div>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $totalsold; ?>
            </h4>
            <a class="btn text-white" href="sellreport.php">View</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-5 mt-5 text-center">
      <!--Table-->
      <p class=" bg-dark text-white p-2">Course Ordered</p>
      <?php
      $sql = "SELECT * FROM courseorder";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
  echo '<table class="table">
    <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Student Email</th>
      <th scope="col">Order Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
    echo '<tr>';
      echo '<th scope="row">'.$row["order_id"].'</th>';
      echo '<td>'. $row["course_id"].'</td>';
      echo '<td>'.$row["stu_email"].'</td>';
      echo '<td>'.$row["order_date"].'</td>';
      echo '<td>'.$row["amount"].'</td>';
      echo '<td><form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["co_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>';
      echo '</tr>';
    }
  echo '</tbody>
  </table>';
  } else {
    echo "0 Result";
  }
  if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM courseorder WHERE co_id = {$_REQUEST['id']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
   }
  ?>
    </div>
  </div>
  </div>
  </div>
  
  </div>  <!-- div Row close from header -->
 </div>  <!-- div Conatiner-fluid close from header -->
<?php
include('./adminInclude/footer.php'); 
?>