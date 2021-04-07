<?php include 'inc/header.php'; ?>
<h2 class="page-header">Log in</h2>
	<form method="post" action="login.php">
		<div class="form-group">
			<label>Username:</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label>Password:</label>
			<input type="text" class="form-control" name="password">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>