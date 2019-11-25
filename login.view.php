<?php $title = 'Login'; ?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
	<h1 class="text-center"><?php echo strtoupper($title); ?></h1>
	<form action="login.php" method="POST">
		<div class="form-group">
			<label>Email: </label>
			<input type="email" class="form-control" name="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input type="password" class="form-control" name="password" placeholder="Enter password">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>

<?php require 'includes/bottom.php'; ?>