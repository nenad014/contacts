<?php
require 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id = $id";
$query = mysqli_query($conn, $sql);
header('Location: index.php');

?>