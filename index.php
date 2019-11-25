<?php 
$title = 'Home';
session_start();
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
<?php
	if(isset($_SESSION['id'])) {
		include 'main.php';
	}
?>
</div>
<?php require 'includes/bottom.php'; ?>