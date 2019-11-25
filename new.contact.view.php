<?php 
$title = 'New contact';
session_start();
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
	<h1 class="text-center">Add new contact</h1>
	<form action="new.contact.php" method="POST">
		<div class="form-group">
			<label>Name: </label>
			<input type="text" class="form-control" name="name" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label>Surname: </label>
			<input type="text" class="form-control" name="surname" placeholder="Enter surname">
		</div>
		<div class="form-group">
			<label>Nickname: </label>
			<input type="text" class="form-control" name="nickname" placeholder="Enter nickname">
		</div>
		<div class="form-group">
			<label>Phone: </label>
			<input type="text" class="form-control" name="phone" placeholder="Enter phone">
		</div>
		<div class="form-group">
			<label>Mobile phone: </label>
			<input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="email" class="form-control" name="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label>Address: </label>
			<input type="text" class="form-control" name="address" placeholder="Enter address">
		</div>
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</form>
</div>
<?php require 'includes/bottom.php'; ?>