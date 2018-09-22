<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
	<title>Form Testing</title>
</head>
<body>

	<?php 
		//component value
		$username 	= "";
		$email		= "";
		$phone		= "";

		//component error value
		$err_username	= "";
		$err_email		= "";
		$err_phone		= "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			//check field username
			if (empty($_POST["username"])) {
				$err_username = "This username field is required";
			} else{
				$username = test_input($_POST["username"]);
				if (!preg_match("/^[a-z]*$/", $username)) {
					$err_username = "Error : Only lowercase sentence has allowed!!";
				}
			}

			//check field email
			if (empty($_POST["email"])) {
				$err_email = "This email field is required";
			} else{
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$err_email = "Error : Invalid email format !!";
				}
			}

			//check field phone
			if (empty($_POST["phone"])) {
				$err_phone = "This phone field is required";
			} else{
				$phone = test_input($_POST["phone"]);
				if (!preg_match("/^[0-9+ ]*$/", $phone)) {
					$err_phone = "Error : Only number , white space snd plus (+) has allowed!!";
				}
			}

		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<h1>Form Edit Username, Email and Phone</h1>

	<p><span class="error"> * is required field </span></p>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		
		<p>Userame : </p>
		<input type="text" name="username" value="<?php echo $username; ?>">
		<span class="error"> * <?php echo $err_username; ?> </span>

		<p>Email : </p>
		<input type="email" name="email" value="<?php echo $email; ?>">
		<span class="error"> * <?php echo $err_email; ?> </span>

		<p>Phone : </p>
		<input type="phone" name="phone" value="<?php echo $phone; ?>">
		<span class="error"> * <?php echo $err_phone; ?> </span>

		<br><br>
		<input type="submit" name="submit" value="Simpan">
	</form>


	<br><br>
	<?php

			echo "<h2> Isi dari form di atas </h2>";

			echo "Username : ".$username."<br>";
			echo "Email : ".$email."<br>";
			echo "Phone : ".$phone."<br>";
	?>
</body>
</html>
