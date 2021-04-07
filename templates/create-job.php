<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create Job Listing</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company">
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="title">
		</div>
        <div class="form-group">
			<label>Job type</label>
			<input type="text" class="form-control" name="position">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location">
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary">
		</div>
		<div class="form-group">
			<label>Image URL</label>
			<input type="text" class="form-control" name="imageUrl">
		</div>
		<div class="form-group">
			<label>Company website</label>
			<input type="text" class="form-control" name="websiteUrl">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>