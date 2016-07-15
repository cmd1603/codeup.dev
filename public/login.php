<?php

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if(($username == 'guest') && ($password == 'password')) {
		header('Location: authorized.php');
		exit();
} 

if (($username !== 'guest' && $username != '') || ($password !== 'password' && $password != '')) {
		$message = 'Login Failed';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login-page.css">	
</head>
<body>



<div class="container">
	<div class="row">
		<div class="Absolute-Center is-Responsive">
			<div class="col-sm-12 col-md-10 col-md-1">
				<form method="POST">
					<h1 class=text-center>Login</h1>
					<input style='height: 100%' class='text-center' type="text" name="username" id="username" placeholder="Username"><br>
					<input style='height: 100%' class='text-center' type="password" name="password" id="password" placeholder="Password"><br>
					<button class='text-center' type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php if (isset($message)) : ?>
	<h1><?= $message ?></h1>
<?php endif; ?>

</body>
</html>