<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
 
	<h1>Selamat Datang</h1>

	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="V_user.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." >
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<left>
				<a class="link" href="Register.php">Register</a>
			</left>
		</form>
		
	</div>
 
 
</body>
</html>