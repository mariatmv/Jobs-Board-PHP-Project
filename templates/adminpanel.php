<?php include 'inc/header.php'; ?>
<ul class="jobs-listing">
        <?php foreach($jobs as $job): ?>
			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="job.php?id=<?php echo $job->id; ?>"><?php echo $job->title; ?></h2>
					<div class="job-meta">
						<a class="meta-company" href="#"><?php echo $job->company; ?></a>
						<span class="meta-date"><?php echo $job->date_posted; ?></span>
					</div>
				</div>
				<div class="job-edit">
					<a href="edit.php?id=<?php echo $job->id; ?>">Edit</a>
					<form style="display:inline;" method="post" action="job.php">
						<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
						<input type="submit" value="Delete">
					</form>
				</div>
			</li>
        <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>