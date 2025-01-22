<?php
 if (isset($_POST['submit'])) 
{
	$errors=[];
	if ($_POST['name']=='') {
	$errors['name'] ="kindly fill this field..!";
	}
	
	if ($_POST['email']=='') {
	$errors['email'] = "kindly fill this field..!";
	}

if ($_POST['pass']=='') {
	$errors['password'] = "kindly fill this field..!";
	}
if ($_POST['gender']=='') {
	$errors['gender'] = "kindly fill this field..!";
	}
if ($_POST['role']=='') {
	$errors['role'] = "kindly fill this field..!";
	}
if (empty($errors)) 
	{
		   $name = $_POST['name'];
		   $email = $_POST['email'];
		   $password = $_POST['pass'];
			$gender =$_POST['gender'];
           $role=$_POST['role'];



		//.......data transfer into database......
		$connection = mysqli_connect("localhost","root","","lms");
		
		$query = "INSERT INTO users
		 (name,email,password,gender,role,status)
		VALUES ('$name','$email','$password','$gender','$role','active') ";

		  $result = mysqli_query($connection,$query);
		

	  }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>document</title>
	<style type="text/css">
		.main {border: 2px solid;border-color: white;text-align: center;background-color:#FFA236;display: inline-block;padding: 50px;margin-left: 550px;}
		label{font-size: 20px;color:#3B8725;}
		input{padding-right: 30px;padding-bottom: 8px;padding-top: 8px;background-color: lightgray;border-radius: 30px;padding-left: 8px}
		button{background-color: #3B8725;color: white;padding: 20px;border-radius: 10px}

	</style>
</head>
<body style="background-image: url('abcd.jpeg');background-repeat: no-repeat;background-position:center;background-size: cover">
	<div class="main">
	<form action="teacherTable.php" method="POST">
	<div class="abc">
		<label> Name:</label>
		<input type="text" name="name">
	</div>
	<br>	

<div class="abc">
		<label>Email:</label>
		<input type="text" name="email">
	</div><br>
<div class="abc">
	<label>Password:</label>
	<input type="password" name="pass">
</div><br>

<div class="abc">
	<label>gender:</label>
		<select name="gender">
			<option value="male">male</option>
			<option value="female">Female</option>
	</select>
	</div><br>

<div class="abc">
	<label>role:</label>
		<select name="role">
			<option value="admin">Admin</option>
			<option value="teachers">Teachers</option>
			<option value="students">Students</option>
	</select>
	</div><br>


<div class="abc">
	<button type="submit" name="submit">SAVE</button>
</div>



	</form>
</div>
</body>
</html>




