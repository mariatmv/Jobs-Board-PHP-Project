<?php include 'inc/header.php'; ?>
<ul class="jobs-listing">
        <?php foreach($jobs as $job): ?>
			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="job.php?id=<?php echo $job->id; ?>"><?php echo $job->title; ?></a></h2>
					<div class="job-meta">
						<a class="meta-company" href="#"><?php echo $job->company; ?></a>
						<span class="meta-date"><?php echo $job->date_posted; ?></span>
					</div>
					<div class="job-details">
						<span class="job-location"><?php echo $job->location; ?></span>
						<span class="job-type"><?php echo $job->position; ?></span>
					</div>
				</div>
				<div class="job-logo">
					<div class="job-logo-box">
						<img src="<?php echo $job->imageUrl; ?>" alt="">
					</div>
				</div>
			</li>
        <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>