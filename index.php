<?php 
		$userName = $password = "";

		
		if(!empty($_POST['user']) && !empty($_POST['pass'])) 
		{
			$userName = $_POST['user'];
			$password = $_POST['pass'];
			

		}
		else
		{
			
		}
		
?>
<!doctype html>
<html lang="en" >
<html>
	<head>
		<title> Login</title>
		<link rel="shortcut icon" href="img/logo.png">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<script src="js/script.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
<body class="big-background" >
	

	<div class="login-container">
		<div class="login-box">
		
						

					<?php
					  if(empty($userName && $password))
						{
							echo form($userName, $password);

						}
						else
						{
							if($userName == 'chuck' && $password == 'roast' || $userName == 'bob' && $password == 'ross')
							{
								echo '<div class="denied">';
									echo '<div class="denied-box">';
									echo '<p id="denied">ACCESS GRANTED</p>';
									echo '</div>';
									echo '</div>';
								echo '<div class="text-box">';
								echo '<div class="text">';
								
								echo text();
								echo '</div>';
								echo '</div>';
							}
							else 
							{
									echo '<div class="denied">';
									echo '<div class="denied-box">';
									echo '<p id="denied">ACCESS DENIED</p>';
									echo '</div>';
									echo '</div>';
									echo form($userName, $password);
									
							}
						}
					
						
					
					?>
		

		</div>
	</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
		
	
	</body>
	<script src="js/script.js"></script>
<html>

<?php

	function form($userName, $password)
	{
		$return = "";
		
		$return .= '	<img src="img/logo.png" width="50" height="50">';
		$return .= '	<div class="login">';
		$return .= '		<div class="top-login">';
		$return .= '			<h1>LOGIN</h1>	';
		$return .= '		</div>';
		$return .= '		<form action="." method="post">';
		$return .= '			<label for="user">Username</label><br>';
		$return .= '			<input class="email" type="text" id="user" name="user" ><br><br>';
		$return .= '			<label for="pass">Password</label><br>';
		$return .= '			<input class="password" type="password" id="pass" name="pass" ><br><br>';		  
		$return .= '			<input class="login-btn" type="submit" value="Login">';
		$return .= '			<input type="reset" class="reset">;'; 
		$return .= '		</form>';
		$return .= '	</div>';
		
		return $return;
	}
	
	function text()
	{
		$fs =fopen('includes/fbi.txt','r');
		
		$contents = fread($fs, filesize('includes/fbi.txt'));
		$words = explode('||>><<||', $contents);
		
		echo '<table>';
		echo '<tr>';
		echo '<th>AGENT | CODENAME</th>';
		echo '</tr>';
		
		foreach($words as $word)
		{
			$names = explode(" ", $word);
				for ($x = 0; $x < sizeof($names); $x++)
				{					
					echo '<br>';
					$names[$x] = strtoupper($names[$x]);
					echo '<tr><td>'.str_replace(",","|",$names[$x]).'</td></tr>';

				}
		} 
		echo '</table>';
	}
?>