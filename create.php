<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

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

	if($job->create($data)) {
		header('location: index.php');
	}
}



$template = new Template('templates/create-job.php');

echo $template;