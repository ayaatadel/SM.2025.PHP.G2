<?php 

/**
 * connection with data base
 * OOP
 * 
 *    ====> craditionials 
 * 0- db-type ===> mysql
 * 1- create database  ==> db_name
 * 2- create user  ==> db_user 
 * 3- localhost  ==> db_host
 * 4- password  ==> db_pass
 */
// PDO   ===> different databases (mysql , postgresql, sqlite, etc)
// Mysqli ===> only MySQL ==> deprecated


$db_name="iti_sm_php_g2_2025";
$db_type="mysql";
$db_user="root";
$db_host="localhost";
$db_pass="";
/**
 * new PDO  ===> constructor
  * string $dsn  ==> data source name,
   * string|null $username = null,
   * string|null $password = null,
   * array|null $options = null
 */

$connection=new PDO("$db_type:host=$db_host;dbname=$db_name",$db_user,$db_pass);

session_start();

// var_dump($connection);

/**  ===> CRUD operations  ==> Create Read Update Delete
 * select data from table
 * insert data into table
 * update data into table
 * delete data from table
 */


/** Insert data into table
 * 1- create table
 * 2- insert data into table
 * 3- query ===> insert into table_name (col1,col2,col3) values (val1,val2,val3)
 */

// $query="insert into users (name,email,password)values('test2','test2@gmail.com','123456')";

// var_dump(($query)); /// string 

// $sqlQuery=$connection->prepare($query); //===>   sql statement

// $sqlQuery->execute(); //===> run sql statement




/**
 * select data from table
 * ==> check table exist
 * ==> select * from table_name
 * ==> fetch data from table
 */

// $query="select * from users";  // ===> string
// $sqlQuery=$connection->prepare($query); //===>   sql statement

// $sqlQuery->execute(); //===> run sql statement  ===> data

// // /**
// //  * get all data 
// //  * get one row from data
// //  */

// // $connection->query($query)->fetchAll(PDO::FETCH_ASSOC); 

// $users=$sqlQuery->fetchAll(PDO::FETCH_ASSOC);
// // $user=$sqlQuery->fetch(PDO::FETCH_ASSOC);

// // var_dump($users);
// echo "<br> <br>     <br>";   
// var_dump($user);



/**
 * session  ===> back
 * local storage ==> front
 * cookies  ===> front  , back
 */







?>