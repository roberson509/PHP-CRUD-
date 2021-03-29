<?php include 'db.php';?>

<?php
// Get the connection and store it in a variable
include("db.php");
$db=$conn;


// FIRST FUNCTION ( To get the Data from the database and make it available)
function fetch_data(){
//create a global variable to import the connection in the function
 global $db;

 //create your query string
  $query="SELECT * from names ORDER BY idnames DESC";

  //mix your your dabase variable with your query string
  $mixage=mysqli_query($db, $query);

  // Specifies what type of array that should be produced as output from the mixage. 
  $row= mysqli_fetch_all($mixage, MYSQLI_BOTH);

  // Return the result so it can be use in other function.
  return $row;      
}

/*CONNECT 2 FUNCTIONS */ 
// Store the first function in a variable.
$fetchData= fetch_data();

//Pass the first function in the second function as argument using the variable where it store.
show_data($fetchData);

// SECOND FUNCTION ( To create the html code using loop)
function show_data($fetchData){
  // html for the table header
 echo '<table class="table">
 <thead>
   <tr>
     <th scope="col">S.N</th>
     <th scope="col">Name</th>
     <th scope="col">Delete</th>
     <th scope="col">Update</th>
   </tr>
 </thead>';   

 // html for the table body
      foreach($fetchData as $data){ 
  echo "<tr>
          <td scope='row'>".$data['idnames']."</td>
          <td>".$data['names']."</td>
          <td><button><a href='php/deleted.php?del=".$data['idnames']."'>Delete</a></button></td>
          <td><button onclick='pickup(".$data['idnames'].")'>Update</button></td>
   </tr>";
     }

}
?>