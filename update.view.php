<?php
$title = 'Update contact';
require 'connection.php';
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM contacts WHERE id=$id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>

<?php require 'includes/top.php'; ?>
<?php require 'includes/navbar.php'; ?>
<div class="container">
	<form action="update.php" method="POST">
		<input type="hidden" class="form-control" name="id" value="<?php echo $result['id']; ?>">
		<div class="form-group">
			<label>Name: </label>
			<input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>">
		</div>
		<div class="form-group">
			<label>Surname: </label>
			<input type="text" class="form-control" name="surname" value="<?php echo $result['surname']; ?>">
		</div>
		<div class="form-group">
			<label>Nickname: </label>
			<input type="text" class="form-control" name="nickname" value="<?php echo $result['nickname']; ?>">
		</div>
		<div class="form-group">
			<label>Phone: </label>
			<input type="text" class="form-control" name="phone" value="<?php echo $result['phone']; ?>">
		</div>
		<div class="form-group">
			<label>Mobile phone: </label>
			<input type="text" class="form-control" name="mobile" value="<?php echo $result['mobile']; ?>">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>">
		</div>
		<div class="form-group">
			<label>Address: </label>
			<input type="text" class="form-control" name="address" value="<?php echo $result['address']; ?>">
		</div>
		<button type="submit" class="btn btn-primary form-control" name="update">Update</button>
	</form>
</div>
<?php require 'includes/bottom.php'; ?>