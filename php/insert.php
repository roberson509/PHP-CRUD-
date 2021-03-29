<?php

include("db.php");
$db=$conn;

$name = $_POST['user'];

$query="INSERT INTO names (names) VALUES('$name')";

mysqli_query($db, $query);

header('Location: /');

?>