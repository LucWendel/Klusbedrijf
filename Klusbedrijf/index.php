<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Naam</label>
     	<input type="text" name="uname" placeholder="Hier uw naam ..."><br>

     	<label>Wachtwoord</label>
     	<input type="password" name="password" placeholder="Hier uw wachtwoord ..."><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>