<?php
session_start();

$user = $_POST['username'];
$password = $_POST['password'];

//echo $user.$password;
if($user == 'admin' && $password == 'password') {
	$_SESSION['login'] = 'true';
	header('Location: ../post.php');
	//echo 'abs';
} else {
	//echo 'sf';
	header('Location: ../index.php?err=Wrong username or password');
}


?>
