<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="index.php">Contacts</a>
	<ul class="navbar-nav">
		<?php if(isset($_SESSION['id'])) : ?>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		<?php else : ?>
		<li class="nav-item">
			<a class="nav-link" href="login.view.php">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="register.view.php">Register</a>
		</li>
		<?php endif; ?>
	</ul>
</nav>
<br>