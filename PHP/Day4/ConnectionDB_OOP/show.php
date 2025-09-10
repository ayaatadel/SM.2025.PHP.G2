<?php

require 'index.php';
require 'home.php';

$id=$_GET['id'];
// var_dump($id);

// // var_dump($database);
$userData= $database->show("users",$id);
// var_dump($userData);
// echo "<br> <br> <br>";
echo "<table class='table table-bordered w-50 mx-auto text-center my-5'>";

 echo "<thead>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Actions</th>";
  echo "</tr>";
  echo "</thead>";
echo "<tbody>";

                // You can output user data here, for example:
                echo "<tr>";
            
                echo "<td>".$userData=['name']."</td>";
                echo "<td>".$userData=['email']."</td>";
                echo "<td>
       
                <a  href='#' class='btn btn-danger mx-1'>Delete </a>
                <a  href='allUsers.php' class='btn btn-info' mx-1>Back </a>
                
    
                </td>";

                echo "</tr>";
       
  echo "</tbody>";
  echo "</table>";

?>

