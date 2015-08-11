<!doctype html>
<html lang="en">
	<head>
		<title>PHP Application</title>
		<!-- Latest compiled and minified CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
				<a class="navbar-brand" href="#">PHP Login System</a>
			</div>
			<?php if(isUserLoggedIn()) {?>
			<div class="collapse navbar-collapse">
				<div class="nav navbar-nav navbar-right">
					<button type="button" class="btn btn-default navbar-btn"><a href="logout.php">Log Out</a></button>
				</div>				
			</div>

			<?php } ?>
		</div>
	</nav>