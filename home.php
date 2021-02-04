<?php 
	session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>E-Health Consulting System</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="PatientList.php"><i class="fas fa-user"></i>Patients</a></li>
            <li><a href="DoctorList.php"><i class="fas fa-address-card"></i>Doctors</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>About</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="logout.php" style="width: 100px;">Logout</a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          <p>This system can manage the information all about in the department inlcuding the doctors and patients.<br>
          	<img src="image1.jpg" style="width: 800px;">
          </p>
      </div>
    </div>
</div>

</body>
</html>
<?php 
}else{
     header("Location: dashboard.php");
     exit();
}