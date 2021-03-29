<?php
include("db.php");
$db=$conn;

$name = $_POST['user'];
$id = $_POST['id'];

$query="UPDATE names SET names = '$name' WHERE idnames ='$id'";

mysqli_query($db, $query);

header('Location: /');

?>