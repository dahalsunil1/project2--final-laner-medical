<?php include('appointmentserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <title>User registration system PHP and MySQL</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Laner Street Medical Centre-Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
 <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">Laner Street Medical Centre</span></a></h1>
          <h2>The good doctor treats the disease. The great doctor treats the patient with the disease.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">HOME</a></li>
		</ul>
     </div>
 </div>

   <div class="header">
       <h2>Register</h2>
   </div>
   
   <form method="post" action="appointmentregister.php">
   <!-- display validation errors here -->
   <?php include('usererrors.php'); ?>
       <div class="input-group">
	       <label>Patients Name</label>
		   <input type="text" name="username" value="<?php echo $username; ?>">
	   </div>
	   <div class="input-group">
	       <label>Address</label>
		   <input type="text" name="address" value="<?php echo $address; ?>">
	   </div>
	   <div class="input-group">
	       <label>Phone</label>
		   <input type="text" name="Phone" value="<?php echo $phone; ?>">
	   </div>
	   <div class="input-group">
	       <label>Appointment Date</label>
		   <input type="text" name="Date" value="<?php echo $appointmentdate; ?>">
	   </div>
	   <div class="input-group">
	       <label>Appointment Time</label>
		   <input type="text" name="address" value="<?php echo $appointmenttime; ?>">
	   </div>
	   <div class="input-group">
	       <label>Problems</label>
		   <input type="text" name="problems" value="<?php echo $problems; ?>">
	   </div>
	  
	   <div class="input-group">
		   <button type="submit" name="register" class="btn">Conform Booking</button>
	   </div>
	   
   </form>
   
 </body>
 </html>