<?php 
require 'index.php';
$user_id=$_SESSION['login_id']; 

if(!isset($user_id)){
    header("location:login.php?error=you must login first");
    exit();
}
else{
    require 'home.php';

  $userData="select * from users where id=$user_id";
  $user=$connection->query($userData)->fetch(PDO::FETCH_ASSOC);

  echo "<table class='table table-bordered w-50 m-auto text-center'>";

  echo "<thead>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Actions</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td>" . $user['name'] . "</td>";
  echo "<td>" . $user['email'] . "</td>";
  echo "<td><a href='server.php"."' class='btn btn-danger' name='btn-delete'>Delete</a></td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
}



?>