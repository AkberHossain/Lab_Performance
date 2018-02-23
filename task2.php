<!DOCTYPE html>
<html>
	<head>
		<title>Task2</title>
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
				$cpass = trim($_POST['cpass']);
				$npass = trim($_POST['npass']);
				$rnpass = trim($_POST['rnpass']);
				
				$errnpass = $errrnpass = "";
				
				if($cpass==$npass)
				{
					$cpass = "";
					$npass = "";
					$rnpass = "";
					$errnpass = "Cannot match";
				}
				else if($npass!=$rnpass)
				{
					$npass = "";
					$rnpass = "";
					$errrnpass = "Match";
				}
			}
		
		?>
		
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			<form method="post" action="#">
				<table>
					<tr>
						<td><h4>Current Password </h4></td>
						<td>:<input type="text" name="cpass" value="<?php echo $cpass ?>">
					</tr>
					<tr>
						<td><h4>New Password </h4></td>
						<td>:<input type="text" name="npass" value="<?php echo $npass ?>"><span><?php echo $errnpass ?></span></td>
					</tr>
					<tr>
						<td><h4>Retype New Password </h4></td>
						<td>:<input type="text" name="npass" value="<?php echo $npass ?>"><span><?php echo $errrnpass ?></span></td>
					</tr>
				</table>
				<hr>
				<input type="submit" name = "submit" value="Submit" > 
			</form>
		</fieldset>
	</body>
</html>