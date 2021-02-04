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
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="index.php"><i class="fas fa-user"></i>Patients</a></li>
            <li><a href="DoctorList.php"><i class="fas fa-address-card"></i>Doctors</a></li>
            <li><a href="index.php"><i class="fas fa-project-diagram"></i>About</a></li>
            <li><a href="index.php"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="login.php" style="width: 100px;">Login</a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          <div class="heads">
<form action="DoctorRegister.php" method="POST">
  <h1 style="font-size: 50px; color: #000;">Add Doctor</h1>
  <br>

  <label>ID Number :</label><input type="text" name="idno" style="margin-left: 20px; height: 30px;">
  <br>
  <br>
  <label>Last name :</label><input type="text" name="lname" style="margin-left: 25px; height: 30px;">
  <br>
  <br>
  <label>First name :</label><input type="text" name="fname" style="margin-left: 25px; height: 30px;">
  <br>
  <br>
  <label>Specialization :</label><input type="text" name="spec" style="margin-left: 5px; height: 30px;">
  <br>
  <br>
  <label>Email :</label><input type="text" name="email" style="margin-left: 60px; height: 30px;">
  <br>
  <br>
  <input type="submit" name="submit" value="ADD" style="width: 80px; height: 30px;" style="margin-left: 200px;">
</div>
</form>

<?php 
  
  if (isset($_POST['submit'])){

    include "db_con.php";

    $IDnumber = $_POST['idno'];
    $Lastname = $_POST['lname'];
    $Firstname = $_POST['fname'];
    $Specialization = $_POST['spec'];
    $Email = $_POST['email'];


    if (empty($IDnumber) || empty($Lastname) || empty($Firstname) || empty($Specialization) || empty($Email)){
        echo "<p style ='color:red; font-size:30px;'> All fields are required.</p>";
      }else{

        
        
        $INSERT = "INSERT INTO doctortable (ID_NO, LASTNAME, FIRSTNAME, SPECIALIZATION, EMAIL)  VALUES
         ('$IDnumber', '$Lastname', '$Firstname', '$Specialization', '$Email')";
        
        
        $query = mysqli_query($conn, $INSERT);

        if($query == TRUE){
          echo "<p style ='color:green; font-size:30px'>Successfully Added.</p>";
        }else{
          echo "<p style ='color:red'>Failed to add record.</p>";
        }

      }

  }

 ?>
      </div>
    </div>
</div>

</body>
</html>