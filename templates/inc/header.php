<!-- <?php 
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="templates\css\master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="site-wrapper">
            <header class="site-header">
				<h1 class="site-title"><a href="index.php">Job Offers</a></h1>
				<h3><a href="create.php">Create new job offer</a></h3>
				<?php 
				if ( !isset($_SESSION['loggedin']) ) {?> 
				<h3 id="guest"><a href="login.php">Log in</a></h3>
				<?php } else { ?>
					<h3 id="user"><a href="admin.php">Admin panel</a></h3>
					<?php } ?>
            </header>