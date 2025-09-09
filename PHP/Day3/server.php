<?php 

// super global variables
// 1- $_POST    
// 2- $_GET
// 3- $_REQUEST         
// 4- $_SERVER
// 5- $_SESSION 


// var_dump($_POST); //  contain data sent using post method
// echo "<br>  ************* <br>";
// var_dump($_GET); //  contain data sent using get method
// echo "<br>  ************* <br>";
// var_dump($_REQUEST); //  contain both $_POST and $_GET data
// echo "<br>  ************* <br>";
// var_dump($_SERVER); //  contain information about headers, paths, and script locations
// echo "<br>  ************* <br>";
// var_dump($_SESSION); //  contain session variables
// echo "<br>  ************* <br>";
/**
 * array(3) { ["userName"]=> string(5) "ayaat" ["userEmail"]=> string(0) "" ["userPassword"]=> string(5) "ayaat" }
 */


// var_dump($_POST); //  contain data sent using post method


// echo "<br> *************** <br>";
// var_dump($_POST['userName']);
// echo "<br> *************** <br>";
// var_dump($_POST['userEmail']);
// echo "<br> *************** <br>";  
// var_dump($_POST['userPassword']);
// echo "<br> *************** <br>";


// var_dump($_FILES); 
// exit;
if(isset($_POST['btn-register'])){
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
    $image = $_FILES['userImage'];
    // var_dump($image);
    // exit;

    // echo "Name: $name <br>";
    // echo "Email: $email <br>";
    // echo "Password: $password <br>";
    // echo "Image: $image <br>";

    // store data in file

 if(!is_dir("images")){
        mkdir("images");
    }
   
    // store  image in folder images
    // data ==> store path of image
// "9.49.30.wats.png"
  $newImage=time().".".(pathinfo($image['name'],PATHINFO_EXTENSION));
//   var_dump($newImage);
//     exit;
/**
 * control on image
 * extension
 * size
 * type
 */

$validExtensions = ['png','gif','jpg','jpeg'];
if (!in_array(pathinfo($image['name'], PATHINFO_EXTENSION), $validExtensions)) {
    // echo "Invalid image format.";
    header("Location: register.php?error=invalid_image_format");
    exit;
}

if($image['size']>2*1024*1024)
{
    // echo "Image size is too large.";
    header("Location: register.php?error=invalid_image_size");
    exit;
}

     move_uploaded_file($image['tmp_name'],"images/".$newImage);
    if(!file_exists("data.json")){
        file_put_contents("data.json","[]");
    }else{
        $userData=[
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
            "image"=>$newImage
        ];
        $currenData=file_get_contents("data.json");//string
        // convert string to array
        // var_dump($currenData);
        // echo "<br>";
        $decodedData=json_decode($currenData,true);
        // var_dump($decodedData);
        // echo "<br>";

        // push new data to array
        // array_push($decodedData,$userData);
        $decodedData[]=$userData;
        // var_dump($decodedData);
        // echo "<br>";

        // convert array to string
        $finalData=json_encode($decodedData);
        // var_dump($finalData);
        // echo "<br>";
        // store string in file
        file_put_contents(("data.json"),$finalData);
        echo "data stored successfully <br>";
        header(("Location: login.php?message=registration_successful")); // redirect to register page
        exit(); // stop execution after redirection
    }
  
}


if(isset($_POST['btn-login']))
{
     $email = $_POST['userEmail'];
    $password = $_POST['userPassword']; 
    
    
}


?>