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
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="PatientList.php"><i class="fas fa-user"></i>Patients</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Doctors</a></li>
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

    <div class="container">
      <h1 style="color: #000; margin-left: 465px;">List of the Doctors</h1>
      <br>
      <a href="DoctorRegister.php" style="margin-left: 545px; border: 2px solid #ccc; border-radius: 60px; background-color: red; color: #000;">ADD DOCTOR</a>
      <br>
      <br>
      <table cellpadding="2px" border="2px" style="margin-left: 350px; background-color: pink;">
        <tr>
          <th>ID</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Specialization</th>
          <th>Email</th>
          
        </tr>
        <tr>
          <?php
            include 'db_con.php';

            $Select = "SELECT * from doctortable";

            $query = mysqli_query($conn,$Select);

            $num = mysqli_num_rows($query);



            while ($res = mysqli_fetch_array($query)) {
                  
            ?>  
          <tr>
            <td><?php echo $res['ID_NO']; ?></td>
            <td><?php echo $res['LASTNAME']; ?></td>
            <td><?php echo $res['FIRSTNAME']; ?></td>
            <td><?php echo $res['SPECIALIZATION']; ?></td>
            <td><?php echo $res['EMAIL']; ?></td>
          </tr>
        <?php
          }

          ?>
        </tr>
      </table>
    </div>
  </div>
</div>
      </div>
    </div>
</div>

</body>
</html>