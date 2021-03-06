<?php include('receptionistserver.php'); ?>
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
       <h1>Register</h1>
   </div>
   
   <form method="post" action="receptionistregister.php">
   <!-- display validation errors here -->
   <?php include('receptionisterror.php'); ?>
       <div class="input-group">
	       <label>Staffname</label>
		   <input type="text" name="staffname" value="<?php echo $staffname; ?>">
	   </div>
	   <div class="input-group">
	       <label>Email</label>
		   <input type="email" name="email" value=""  <?php echo $email; ?>">
	   </div>
	   <div class="input-group">
	       <label>Password</label>
		   <input type="password" name="password_1">
	   </div>
	   <div class="input-group">
	       <label>Confirm Password</label>
		   <input type="password" name="password_2">
	   </div>
	   <div class="input-group">
		   <button type="submit" name="register" class="btn">Register</button>
	   </div>
	   <p>
	        Already a member? <a href="receptionistlogin.php">Sign in</a>
	   </p>
   </form>
   
 </body>
 </html>