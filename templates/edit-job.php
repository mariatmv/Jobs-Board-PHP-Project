<?php include 'inc/header.php'; ?>
<h2 class="page-header">Edit Job</h2>
	<form method="post" action="edit.php?id=<?php echo $job[0]->id; ?>">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company" value="<?php echo $job[0]->company; ?>">
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="title" value="<?php echo $job[0]->title; ?>">
		</div>
        <div class="form-group">
			<label>Job type</label>
			<input type="text" class="form-control" name="position" value="<?php echo $job[0]->position; ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"><?php echo $job[0]->description; ?></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $job[0]->location; ?>">
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary" value="<?php echo $job[0]->salary; ?>">
		</div>
		<div class="form-group">
			<label>Image URL</label>
			<input type="text" class="form-control" name="imageUrl" value="<?php echo $job[0]->imageUrl; ?>">
		</div>
		<div class="form-group">
			<label>Company website</label>
			<input type="text" class="form-control" name="websiteUrl" value="<?php echo $job[0]->websiteUrl; ?>">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>