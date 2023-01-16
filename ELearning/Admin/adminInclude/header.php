<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="../css/adminstyle.css">

</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-Learning <small class="text-white">Admin Area</small></a> 
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') {echo 'active';} ?>" href="adminDashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'courses') {echo 'active';} ?>" href="courses.php">
        <i class="fab fa-accessible-icon"></i>
        Courses
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'lessons') {echo 'active';} ?>" href="lessons.php">
        <i class="fab fa-accessible-icon"></i>
        Lessons
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'students') {echo 'active';} ?>" href="students.php">
        <i class="fas fa-users"></i>
        Students
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'sellreport') {echo 'active';} ?>" href="sellReport.php">
        <i class="fas fa-table"></i>
        Sell Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'paymentstatus') {echo 'active';} ?>" href="adminPaymentStatus.php">
        <i class="fas fa-table"></i>
        Payment Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'feedback') {echo 'active';} ?>" href="feedback.php">
        <i class="fab fa-accessible-icon"></i>
        Feedback
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') {echo 'active';} ?>" href="adminChangePass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>