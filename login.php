<?php
session_start();
require_once 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query)['id'];
if($result){
	$_SESSION['id'] = $result;
	header('Location: index.php');
} else {
	header('Location: login.view.php');
}
?>