<?php

require 'index.php';
require 'home.php';

// var_dump($database);
$allUsersData = $database->index("users");
// var_dump($allUsersData);
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
   foreach ($allUsersData as $user) {
                // You can output user data here, for example:
                echo "<tr>";
            
                echo "<td>".$user['name']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<td>";
                
               echo 
               "<a href='show.php?id=" . $user['id'] . "' class='btn btn-warning'>show </a>";
               echo 
               "<a href='delete.php?id=" . $user['id'] . "' class='btn btn-danger'>show </a>";

                
               echo "</td>";

                echo "</tr>";
            }
  echo "</tbody>";
  echo "</table>";

?>

