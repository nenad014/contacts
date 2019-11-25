<?php
require 'connection.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$nickname = $_POST['nickname'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$id = $_POST['id'];

$sql = "UPDATE contacts SET name='$name', surname='$surname',
		nickname='$nickname', phone='$phone', mobile='$mobile',
		email='$email', address='$address'
		WHERE id=$id";
$query = mysqli_query($conn, $sql);

if($query) {
	header('Location: index.php');
} else {
	header('Location: update.view.php');
}
?>