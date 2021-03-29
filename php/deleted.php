<?php 
include("db.php");
$db=$conn;

$del = $_GET['del'];

$query="DELETE FROM names WHERE idnames =$del";

mysqli_query($db, $query);

header('Location: /');
?>