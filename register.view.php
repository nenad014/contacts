<?php $title = 'Register'; ?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
	<h1 class="text-center"><?php echo strtoupper($title); ?></h1>
	<form action="register.php" method="POST">
		<div class="form-group">
			<label>Username: </label>
			<input type="text" class="form-control" name="username" placeholder="Enter username">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="email" class="form-control" name="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input type="password" class="form-control" name="password" placeholder="Enter password">
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
</div>

<?php require 'includes/bottom.php'; ?>