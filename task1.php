<!DOCTYPE html>
<html>
	<head>
		<title>Task1</title>
		<style>
			span{
				color: red;
			}
		</style>
	</head>
	<body>
		
		<?php
		
			error_reporting(0);
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$name = trim($_POST['name']);
				$pass = trim($_POST['pass']);
				
				$errname = $errpass = "";
				
				if(str_word_count($name)<2)
				{
					$name="";
					$errname = "Name must contains at least two words";
				}
				
				if(strlen($pass)<8)
				{
					$pass ="";
					$errpass = "Password must contains at least 8 characters";
				}
				//else if()
				//{
				//	$pass ="";
				//	$errpass = "Password must contains at least 1 special character";
				//}
			}
		
		?>
		
		<fieldset>
			<legend>LOGIN</legend>
			<form method="post" action="#">
				<table>
					<tr>
						<td><h4>User Name </h4></td>
						<td>:<input type="text" name="name" value="<?php echo $name ?>"><span>* <?php echo $errname ?></span></td>
					</tr>
					<tr>
						<td><h4>Password </h4></td>
						<td>:<input type="text" name="pass" value="<?php echo $pass ?>"><span>* <?php echo $errpass ?></span></td>
					</tr>
				</table>
				<hr>
				<input type="checkbox" name="remember_me"> Remember Me <br><br>
				<input type="submit" name = "submit" value="Submit" > 
				<a href="#">Forgot password?</a>
			</form>
		</fieldset>
	</body>
</html>