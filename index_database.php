<!Doctype>
<html>
	<head>
		<title>Web Application Demo</title>
		
	</head>
	<body style="background: pink;">

		<h1 style="text-align:center; vertical-align: middle;">Hello User</h1>
		<div style="text-align:center; vertical-align: middle;">
			<form method='post' action='/store/user'>

				<?php 
					echo '<p >Please enter your name</p>'; 
				?>
				<input type='text' name='user'>
				<input type='submit' value='submit'> 
			</form>
		</div>
	</body>
</html>