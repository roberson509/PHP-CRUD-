<?php
include("db.php");
$db=$conn;

$id = $_POST['id'];

$query="SELECT * from names WHERE idnames=$id";

$mixage=mysqli_query($db, $query);

 
$row= mysqli_fetch_all($mixage, MYSQLI_ASSOC);

  foreach($row as $data){ 
  echo '
<div class="pickBox">
<form action="php/update.php" method="post">
<input style="width: 300px" type="text" name="user" value="'.$data['names'].'" >
<input type="hidden" name="id" value='.$data['idnames'].' >
<button type="submit">Change</button>
</form>
</div>
  ';
     }


?>