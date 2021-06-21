<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP REGISTRATION FORM</title>
</head>
<body>

	<h1>REGISTRATION FORM</h1>

<?php 

$fname = $lname = $gender =$dob =$religion = $email = $username =$password="";
$firstNameErr = $lastNameErr = $genderErr= $dateOfbirthErr =$religionErr  =$emailErr  =$userNameErr =$passWordErr= "";
$flag = false;
$successfulMessage = $errorMessage = "";

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
if(empty($_POST["fname"])) {
$firstNameErr = "Field can not be empty";
$flag = true;
}
if(empty($_POST["lname"])) {
$lastNameErr = "Field can not be empty";
$flag = true;
}
if(empty($_POST["gender"])) {
$genderErr = "Field can not be empty";
$flag = true;
}
if(empty($_POST["dob"])) {
$dateOfbirthErr = "Field can not be empty";
$flag = true;
}

if(empty($_POST["email"])) {
$emailErr = "Field can not be empty";
$flag = true;
}

if(empty($_POST["username"])) {
$userNameErr = "Field can not be empty";
$flag = true;
}
if(empty($_POST["password"])) {
$passWordErr = "Field can not be empty";
$flag = true;
}

 if(!$flag) 
    {
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $gender = test_input($_POST["gender"]);
      $dob = test_input($_POST["dob"]);
      $religion = test_input($_POST["religion"]);
      $email = test_input($_POST["email"]);
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
  echo "Your First name:" . $_POST["fname"]; echo "<br>";
  echo "Your Last name:" . $_POST["lname"]; echo "<br>";
  if(isset($_POST['gender']))
    {
    echo "You have selected :".$_POST['gender'];  //  Displaying Selected Value
    }

  echo "<br>";
  echo "Date of birth:" . $_POST["dob"]; echo "<br>";
  echo "Religion:" . $_POST["religion"]; echo "<br>";
  echo "Present Address:" . $_POST["paddress"]; echo "<br>";
  echo "Permanent Address:" . $_POST["peraddress"]; echo "<br>";
  echo "Phone Numbr:" . $_POST["phone"]; echo "<br>";
  echo "Email:" . $_POST["email"]; echo "<br>";
  echo "Website:" . $_POST["weblink"]; echo "<br>";
  echo "Username:" . $_POST["username"]; echo "<br>";
  echo "Password:" . $_POST["password"]; echo "<br>";echo "<br>";echo "<br>";
    }

}

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

	<fieldset>
		<legend>Basic Information:</legend>

	<label for="fname">Enter your First Name:</label>
	<input type="text" id="fname" name="fname">
	<span style="color: red"><?php echo $firstNameErr; ?></span>
	<br> </br>
	<label for="lname">Enter your Last Name:</label>
	<input type="text" id="lname" name="lname">
	<span style="color: red"><?php echo $lastNameErr; ?></span>
	<br> </br>
	<label for="gender">Gender:</label>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">Male</label>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label>
	<span style="color: red"><?php echo $genderErr; ?></span>
	<br> </br>  
	<label for="dob">Date of Birth:</label>
	<input type="date" id="dob" name="dob">
	<span style="color: red"><?php echo $dateOfbirthErr; ?></span>
	<br> </br>
	<label for="fname">Religion:</label>
	<select id="religion"name="religion">
		<option value=" "selected></option>
		<option value="Islam">Islam</option>
		<option value="Christianity ">Christianity</option>
		<option value="Hinduism">Hinduism</option>
	</select>
	<span style="color: red"><?php echo $religionErr; ?></span>

	<br> </br>
	

</fieldset>

	<br> </br>

<fieldset>
	<legend>Contact Information:</legend>

	<label for="paddress">Enter Present Address:</label>
	<textarea id="paddress" name="paddress"></textarea> 
	
	<br> </br>
	<label for="peraddress">Enter Permanent Address:</label>
	<textarea id="peraddress" name="peraddress"></textarea> 
	
	<br> </br>
	<label for="email">Enter your Email:</label>
	<input type="email"id="email" name="email">
	<span style="color: red"><?php echo $emailErr; ?></span>
	<br> </br>
	<label for="phone">Enter your Phone Number:</label>
	<input type="tel"id="phone" name="phone">
	
	<br> </br>
	<label for="weblink">Personal Website Link:</label>
	<input type="url"id="weblink" name="weblink">
	
</fieldset>
	
	<br> </br>

<fieldset>
	<legend>Account Information:</legend>
		
		<label for="username">Enter your username:</label>
		<input type="text" id="username" name="username">
		<span style="color: red"><?php echo $userNameErr; ?></span>
		<br> </br>
		<label for="password">Enter your password</label>
		<input type="password" id="password" name="password">
		<span style="color: red"><?php echo $passWordErr; ?></span>
	
</fieldset>	
       
       <br> </br>

	<input type="submit" name="Submit">

	<br>

	 <span style="color: green"><?php echo $successfulMessage; ?></span>
      <span style="color: red"><?php echo $errorMessage; ?></span>

</form>
</body>
</html>