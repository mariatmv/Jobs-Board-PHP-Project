<?php include 'inc/header.php'; ?>
<div class="job-single">
			<main class="job-main">
				<div class="job-card">
					<div class="job-primary">
						<header class="job-header">
							<h2 class="job-title"><a href="#"><?php echo $job[0]->title; ?></a></h2>
							<div class="job-meta">
								<a class="meta-company" href="#"><?php echo $job[0]->company; ?></a>
								<span class="meta-date"><?php echo $job[0]->date_posted; ?></span>
							</div>
							<div class="job-details">
								<span class="job-location"><?php echo $job[0]->location; ?></span>
								<span class="job-type"><?php echo $job[0]->position; ?></span>
								<span class="job-type">Salary: <?php echo $job[0]->salary; ?>$</span>
							</div>
						</header>

						<div class="job-body">
							<p><?php echo $job[0]->description; ?></p>
						</div>
					</div>
				</div>
			</main>
			<aside class="job-secondary">
				<div class="job-logo">
					<div class="job-logo-box">
						<img src="<?php echo $job[0]->imageUrl; ?>" alt="">
					</div>
				</div>
				<a href="#" class="button button-wide">Apply now</a>
				<a href="#"><?php echo $job[0]->websiteUrl; ?></a>
			</aside>
		</div>

<?php include 'inc/footer.php'; ?>