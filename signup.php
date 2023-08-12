<?php
session_start();


include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
    


	
    if(!empty($gmail) && !empty($password)){

        $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname','$lastname', '$Gender', '$num', '$address', '$gmail', '$password' )";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        
    }else{
        echo "<script type='text/javascript'> alert('Please Enter some valid information')</script>";
    }

}


?>








<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
</head>
<body>
    <center><h2>Welcome to Registeration <br></h1></center>
	<div class="container">
		<h1>Sign Up Here</h1>
        <h4>It's Free & takes a minute</h4>

		<form action="" method="post">


			<label>Frist name:</label>
			<input type="text" name="fname" required>


            <label>Last name:</label>
			<input type="text" id="username" name="lname" required>


            <label> Gender:</label>
			<input type="text" name="gender" required>

            <label>Contact Address:</label>
			<input type="text" name="number" required>

            <label>Address:</label>
			<input type="tel" name="add" required>

            <label>Email:</label>
			<input type="email" name="mail" required>

            <label>Password:</label>
			<input type="password" name="pass" required>

            
			<input class="btn" type="submit" value="Signup">

			
		</form>

		<p>Already have an account?</p><a href="login.php">Login</a>
	</div>
</body>
</html>