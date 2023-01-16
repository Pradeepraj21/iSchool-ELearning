<?php 
if(!isset($_SESSION)){ 
  session_start(); 
}
include_once('../dbConnection.php');

// setting header type to json, We'll be outputting a Json data
header('Content-type: application/json');

// Checking Email already Registered
if(isset($_POST['stuemail']) && isset($_POST['checkemail'])){
  $stuemail = $_POST['stuemail'];
  $sql = "SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
  $result = $conn->query($sql);
  $row = $result->num_rows;
  echo json_encode($row);
  }
 
  // Inserting or Adding New Student
  if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";
    if($conn->query($sql) == TRUE){
      echo json_encode("OK");
    } else {
      echo json_encode("Failed");
    }
  }

  // Student Login Verification
  if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
      $stuLogEmail = $_POST['stuLogEmail'];
      $stuLogPass = $_POST['stuLogPass'];
      $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";
      $result = $conn->query($sql);
      $row = $result->num_rows;
      
      if($row === 1){
        $_SESSION['is_login'] = true;
        $_SESSION['stuLogEmail'] = $stuLogEmail;
        echo json_encode($row);
      } else if($row === 0) {
        echo json_encode($row);
      }
    }
  }

?>