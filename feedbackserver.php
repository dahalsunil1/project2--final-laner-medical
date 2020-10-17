<?php 
    session_start();
    $name = "";
	$feedback = "";
	$errors = array();
	
	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	//if the register button is clicked
	if (isset($_POST['Submit'])) {
		$name = ($_POST['Name']);
		$feedback = ($_POST['Feedback']);
	}
	
	
	
	if (count($errors) == 0) {
			
			$sql = "INSERT INTO feedback (name, feedback)
			       VALUES ('$name', '$feedback')";
		mysqli_query($db, $sql);
		$_SESSION['name'] = $name;
			$_SESSION['success'] = "You are now logged in";
	}
			
		
?>