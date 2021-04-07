<?php include_once 'config/init.php'; ?>

<?php
session_start();

$username = "";
$email = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'admin', '123456', 'jobs_board');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $password;
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM jobs_board.users WHERE username='$username' AND password='".$password."'";
        echo $query;
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['loggedin'] = true;
          header('location: admin.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

$template = new Template('templates/loginpage.php');


echo $template;