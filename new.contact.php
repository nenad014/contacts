<?php
require_once 'connection.php';
session_start();
if(isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$nickname = $_POST['nickname'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	$sql = "INSERT INTO contacts VALUES(NULL, '$name', '$surname', '$nickname', '$phone', '$mobile', '$email', '$address', '$id')";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header('Location: index.php');
	} else {
		header('Location: new.contact.view.php');
	}
}
?>