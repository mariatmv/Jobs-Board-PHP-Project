<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
	$data = array();
	$data['title'] = $_POST['title'];
	$data['company'] = $_POST['company'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
    $data['imageUrl'] = $_POST['imageUrl'];
    $data['websiteUrl'] = $_POST['websiteUrl'];
    $data['position'] = $_POST['position'];

	if($job->update($job_id, $data)){
		header('location: job.php?id='.$job_id);
	}
}



$template = new Template('templates/edit-job.php');
$template->job = $job->getJob($job_id);

echo $template;