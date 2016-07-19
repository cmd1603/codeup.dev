<?php

session_start();

function pageController()
{
	$errorMessage = 'Login Failed';


	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	if (($username == 'guest') && ($password == 'password')) {
		$_SESSION['logged_in_user'] = $username;
		header('Location: authorized.php');
	} else {
		echo $errorMessage;
	}

}

if ($_POST) {
	pageController();
}

if(isset($_SESSION['logged_in_user'])) {
	header('Location: authorized.php');
	exit;
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login-page.css">	
</head>
<body background="img/brick.jpg" style="background-color: black;
      webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover">

	<div class="container" id="form" style="background-color: lightgrey; opacity: 0.9">
		<form method="POST">
			<div class='row'>
				<div class="col-sm-offset-2 col-sm-10" id="header">
					<h1 style="font-size: 55px; color: black; font-weight: bold; text-decoration: underline">Login</h1><br>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputUsername" class="col-sm-3 form control-label" style="text-align: right; color: black; text-decoration: underline; font-weight: bolder">Username</label>
				<div class="col-sm-6">
					<input class='form-control' type="text" name="username" id="username" placeholder="Username" autofocus>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputUsername" class="col-sm-3 form control-label" style="text-align: right; color: black; text-decoration: underline; font-weight: bolder">Password</label>
				<div class="col-sm-6">
					<input class='form-control' type="password" name="password" id="password" placeholder="Password"><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
				<button type="submit" class="btn btn-primary btn-lg">Login</button>
				</div>
			</div>

		</form>
	</div>

<?php if (isset($message)) : ?>
	<h1><?= $message ?></h1>
<?php endif; ?>

</body>
</html>