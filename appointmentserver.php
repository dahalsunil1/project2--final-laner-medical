<?php
    session_start();

    $username = "";
	$address = "";
	$phone = "";
	$appointmentdate = "";
	$appointmenttime = "";
	$problems = "";
	$errors = array();
	
	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	//if the register button is clicked
	if (isset($_POST['register'])) {
		$patientsName = ($_POST['username']);
		$address = ($_POST['address']);
		$phone = ($_POST['phone']);
		$appointmentdate = ($_POST['appointmentdate']);
		$appointmenttime = ($_POST['appointmenttime']);
		$Problems = ($_POST['problems']);
		
		//ensure that form fields are filled properly
		if (empty($PatientsName)) {
			array_push($errors, "Username is required");
		}
		if (empty($address)) {
			array_push($errors, "Address is required");
		}
		if (empty($phone)) {
			array_push($errors, "Phone Number is required");
		}
		if (empty($appointmentdate)) {
			array_push($errors, "Date is required");
		}
		if (empty($appointmenttime)) {
			array_push($errors, "Time is required");
		}
		
		
		//if there are no errors, save user to database
		if (count($errors) == 0) {
			
			$sql = "INSERT INTO users (username, address, phone, appointmentdate, appointmenttime, problems)
			       VALUES ('$username', '$address', '$phone', '$appointmentdate', '$appointmenttime', '$problems')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: userindex.php'); //redirect to home page.
		}
	}
	
	
?>