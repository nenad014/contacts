<?php
	require 'connection.php';
?>
<?php
$id = $_SESSION['id'];

$sql = "SELECT contacts.id, contacts.name, contacts.surname, contacts.nickname, contacts.phone, contacts.mobile, contacts.email, contacts.address, contacts.user_id FROM contacts INNER JOIN users ON contacts.user_id = users.id WHERE contacts.user_id = $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<h1 class="text-center">Welcome <?php// echo $row['username']; ?></h1>
<hr>
<button type="button" class="btn btn-outline-info"><a href="new.contact.view.php">New contact</a></button>
<br>
<h3 class="text-center">Your contacts</h3>

<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Nickname</th>
			<th>Phone</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($result as $row) :
		?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['surname']; ?></td>
			<td><?php echo $row['nickname']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<button type="button" class="btn btn-outline-warning"><a href="update.view.php?id=<?php echo $row['id']; ?>">Update</a></button>
				<button type="button" class="btn btn-outline-danger"><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>