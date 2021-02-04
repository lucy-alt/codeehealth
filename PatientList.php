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
            <li><a href="#"><i class="fas fa-user"></i>Patients</a></li>
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

    <div class="container">
      <h1 style="color: #000; margin-left: 465px;">List of the Patients</h1>
      <br>
      <a href="PatientRegister.php" style="margin-left: 545px; border: 2px solid #ccc; border-radius: 60px; background-color: red; color: #000;">ADD PATIENT</a>
      <br>
      <br>
      <table cellpadding="2px" border="2px" style="margin-left: 250px; background-color: pink;">
        <tr>
          <th>ID</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Age</th>
          <th>Disease</th>
          <th>Address</th>
          <th>Time Of Cosulting</th>
          <th>Date Of Cosulting</th>
          <th>Doctor</th>

        </tr>
        <tr>
          <?php
            include 'db_con.php';

            $Select = "SELECT * from tablepatient";

            $query = mysqli_query($conn,$Select);

            $num = mysqli_num_rows($query);



            while ($res = mysqli_fetch_array($query)) {
                  
            ?>  
          <tr>
            <td><?php echo $res['id_number']; ?></td>
            <td><?php echo $res['Lastname']; ?></td>
            <td><?php echo $res['Firstname']; ?></td>
            <td><?php echo $res['Age']; ?></td>
            <td><?php echo $res['Disease']; ?></td>
            <td><?php echo $res['address']; ?></td>
            <td><?php echo $res['time_in']; ?></td>
            <td><?php echo $res['date_in']; ?></td>
            <td><select>
              <option value="Doctor">Select Doctor</option>
              <option value="1">Gary Berganio</option>
              <option value="2">Leriza Villasista</option>
              <option value="2">Juliana Caliag</option>
              <option value="2">Rhemz Madrona</option>
              <option value="2">Mark Ronnel Mendoza</option>
              <option value="2">John Jerick Dela Cruz</option>
            </select></td>
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