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
            <li><a href="#"><i class="fas fa-user"></i>Patients</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Doctors</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>About</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="index.php" style="width: 100px;">Login</a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">

     <br>
     <form action="login.php" method="post">

      <h2>LOGIN</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label style="font-family: cursive;">Username</label>
      <input type="text" name="user" placeholder="Username" style="font-family: cursive;"><br>

      <label style="font-family: cursive;">Password</label>
      <input type="password" name="pass" placeholder="Password" style="font-family: cursive; margin-left: 5px;"><br>

      <button type="submit" style="font-family: cursive; margin-left: 70px; margin-top: 10px; width: 100px; height: 30px;">Login</button>
     </form>

      </div>
    </div>
</div>

</body>
</html>