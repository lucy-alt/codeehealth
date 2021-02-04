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
            <li><a href="PatientList.php"><i class="fas fa-user"></i>Patients</a></li>
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
<form action="PatientRegister.php" method="POST">
  


    <h1 style="font-size: 50px; color: #000;">Add Patient</h1>
  <br>

  <label>Patient ID :</label><input type="text" name="idno" style="margin-left: 80px;">
  <br>
  <label>Last name :</label><input type="text" name="lname" style="margin-left: 78px;">
  <br>
  <label>First name :</label><input type="text" name="fname" style="margin-left: 78px;">
  <br>
  <label>Age :</label><input type="text" name="age" style="margin-left: 125px;">
  <br>
  <label>Disease :</label><input type="text" name="des" style="margin-left: 100px;">
  <br>
  <label>Address :</label><input type="text" name="add" style="margin-left: 98px;">
  <br>
  <label>Time of consulting :</label><input type="time" name="times" style="margin-left: 24px;">
  <br>
  <label>Date of consulting :</label><input type="date" name="dates" style="margin-left: 23px;">
  <br>
  <br>
  <input type="submit" name="submit" value="ADD" style="width: 150px; height: 30px; margin-left: 50px;">


</div>
</form>
  
    <?php 
  
  if (isset($_POST['submit'])) {

    include "db_con.php";

    $Pid = $_POST['idno'];
    $lastname = $_POST['lname'];
    $firstname = $_POST['fname'];
    $ages = $_POST['age'];
    $prob = $_POST['des'];
    $address = $_POST['add'];
    $times = $_POST['times'];
    $dates = $_POST['dates'];


    if (empty($Pid) || empty($lastname) || empty($firstname) || empty($ages) || empty($prob) || empty($address) || empty($times) || empty($dates)) {
      echo "All Fields are required....";
    }else{


      $Insert = "INSERT INTO tablepatient (id_number, Lastname, Firstname, Age, Disease, address, time_in, date_in ) VALUES 
      ('$Pid','$lastname', '$firstname', '$ages', '$prob', '$address', '$times', '$dates')";

      $query = mysqli_query($conn,$Insert);

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