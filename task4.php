<!DOCTYPE html>

<html>
	<head>
		<title>Task4</title>
		<style>
			span{
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
		
			error_reporting(0);
		
			$name = $errname = $email = $erremail = $uname = $pass = $erruname = $errpass = $cpass = $errcpass = "";
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$name = trim($_POST['name']);
				$pass = trim($_POST['pass']);
				$email = trim($_POST['email']);
				$uname = trim($_POST['uname']);
				$cpass = trim($_POST['cpass']);
				
				if(!(empty($name))){
					if(str_word_count($name)<2)
					{
						$name="";
						$errname = "Name must contains at least two words";
					}
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
					{
						$name="";
     				 	$errname = "Only letters and white space allowed";
    				}
				}
				else
				{
					$name="";
					$errname = "Cannot be empty";
				}
				
				if(empty($uname))
				{
					$uname="";
					$erruname = "Cannot be empty";
				}
				
				if(empty($email))
				{
					$email="";
					$erremail = "Cannot be empty";
				}
				
				if(!(empty($pass))){
					if(strlen($pass)<8)
					{
						$pass ="";
						$errpass = "Password must contains at least 8 characters";
					}
				}
				else
				{
					$pass="";
					$errpass = "Cannot be empty";
				}
				
				if(!(empty($cpass))){
					if($cpass!=$pass)
					{	$cpass = "";
						$errcpass = "Must be match";
					}
				}
				else
				{
					$cpass="";
					$errcpass = "Cannot be empty";
				}

				if (empty($_POST["gender"])) 
				{
			    	$errgender = "Gender is required";
			  	}
			}
		
		?>
		
		<fieldset>
			<legend>REGISTRATION</legend>
			<form method="post" action="#">	
				<table width="100%">
					<tr>
						<td><h4>Name</h4></td>
						<td>:  <input type="text" name="name" value="<?php echo $name ?>" ><span>*<?php echo $errname ?></span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><h4>Email</h4></td>
						<td>:  <input type="text" name="email" value="<?php echo $email ?>" ><span>*<?php echo $erremail ?></span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><h4>User Name</h4></td>
						<td>:  <input type="text" name="uname" value="<?php echo $uname ?>"><span>*<?php echo $erruname ?></span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><h4>Password</h4></td>
						<td>:  <input type="text" name="pass" value="<?php echo $pass ?>"><span>*<?php echo $errpass ?></span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
					<tr>
						<td><h4>Confirm Password</h4></td>
						<td>:  <input type="text" name="cpass" value="<?php echo $cpass ?>"><span>*<?php echo $errcpass ?></span></td>
					</tr>
					<tr>
						<td colspan="2"><hr></td>
					</tr>
				</table>				
				<fieldset>
					<legend>Gender</legend>
					<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" >Male
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"  >Female
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"  >Other
					<span>*<?php echo $errgender ?></span></td>
				</fieldset>
				
				<hr>
				
				<fieldset>
					<legend>Date Of birth</legend>
					<input type="text" name="date" value=" <?php echo $date ?> "  style ="width:60px">/
					<input type="text" name="month" value=" <?php echo $month ?> " style ="width:60px">/
					<input type="text" name="year" value=" <?php echo $year ?> " style ="width:80px"><span style="color:black;">(dd/mm/yyyy)</span>
				</fieldset>				
				<hr>
				<input type="submit" name = "submit" value="Submit" > 
			</form>
		</fieldset>		
	</body>
</html>