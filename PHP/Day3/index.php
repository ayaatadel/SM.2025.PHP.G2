<?php

/**
 * Directory   ==> folder  ==> create folder , delete folder , add file to folder
 * 
 * 
 * path of directory 
 * __FILE__  ==> return the full path of the current file+ file name.extension
 * __DIR__   ==> return the full path of the current directory
 * pathinfo() ==> return an array contains info about the path
 * dirname() ==> return the directory name of the path
 */


// echo __FILE__ . "<br>";   // full path + file name + extension of the current file
// echo __DIR__ . "<br>";   // full path untill the directory
// echo "<br>********************************<br>";


// print_r( pathinfo(__FILE__) );  // return an array contains info about the path
//Array ( [dirname] => D:\ITI\Ayaat_ITI\AyaatCoursesITI\summer_2025\php_g2\PHP\Day3 [basename] => index.php [extension] => php [filename] => index )

/**
 * pathinfo() || all path info
 *==> keys of associative array returned by pathinfo()
 * dirname
 * basename
 * extension
 * filename
 * flags : PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME
 */

// echo (pathinfo((__FILE__))["dirname"]),"<br>";  // return the directory name of the path untill the directory
// echo (pathinfo((__FILE__))["filename"]),"<br>";  // return file name without extension
// echo (pathinfo((__FILE__))["basename"]),"<br>";  // return file name with extension 
// echo "<br>********************************<br>";
// echo(pathinfo((__FILE__),PATHINFO_DIRNAME)),"<br>";
// echo(pathinfo((__FILE__),PATHINFO_FILENAME)),"<br>";
// echo(pathinfo((__FILE__),PATHINFO_BASENAME)),"<br>";


// echo "<br>********************************<br>";

/**
 * direname() 
 * levels   ==> numbers of back steps
 */
// echo dirname(__FILE__) . "<br>";  // return the directory name of the path untill the directory
// echo dirname(__FILE__, 2) . "<br>";   
// echo dirname(__FILE__, 3) . "<br>";   

// "../"    ==> step back to the parent directory
// "./"==> current directory


// r (read): 4
// w (write): 2
// x (execute): 1
// 7 ==> 4+2+1  ==> rwx
// 3 ==> 2+1  ==> wx
// 6 ==> 2+1  ==> rw

/**
 * make directory
 * ===>mkdir("folderName",)
 * 
 * ==> ckeck if the folder already exists or not using is_dir("folderName")
 * 
 * remove directory
 * ===> rmdir("folderName")
 */


// mkdir("newFolder");
// var_dump(is_dir("newFolder")); // create folder if not exists

// if (is_dir("newFolder")&& is_dir("newFolder/images")) {

//     // mkdir("newFolder/images");
//     echo "folders already exists <br>";
// } else {
//     mkdir("newFolder");
//     echo "NewFolder created successfully  <br>";
//     mkdir("newFolder/images");
//     echo "folder created successfully in NewFolder <br>";
// }


// remove directory


// if(is_dir("newFolder/images")){
// rmdir("newFolder/images");
// }
//    else{
//     echo "folder not exists <br>";

// }


/** 
 * Deal with file ==>
 *  1 - file content
 * 
 * ==> check if file exists
 * ==> create file
 * ==> delete file
 * ==> get file size
 * ==> add content to file
 * ==> read file content
 * ==> delete file content
 */
/**
 * file Mode ==> read , write (over ride), append( add to exist text)
 *
 * r  ==> read only  ==> if file exist
 * w ==>write ==> if file exist override content , if not create new file
 * a ==>append ==> if file exist add content to the end of the file , if not create new file
 * r+ ==> read and write ==> if file exist
 * w+ ==> write and read ==> if file exist override content , if not create new file
 * a+ ==> append and read ==> if file exist add content to the end of the file , if not create new file
 * 
 */
// create file

// file_put_contents(("newFolder/students.txt"), "");
// file_put_contents(("newFolder/students.txt"), "Hello php summer Training \n");
// file_put_contents(("newFolder/students.txt"), " Course PHP  \n");  // write ===> override on exist content
// file_put_contents(("newFolder/students.txt"), " Hello php summer Training  \n", FILE_APPEND);  // append ===> add to exist content
// file_put_contents(("newFolder/students.txt"), " new Data  \n", FILE_APPEND | LOCK_EX);  // append ===> add to exist content + lock execute ==> to prevent other users from writing to the file at the same time


// read data from file
// echo file_get_contents("newFolder/students.txt"); // get all data in string format



// check if file exists (file_exists("filePath"))  
//  check on permissions of file
// if(file_exists("newFolder/students.txt")){
//     if(is_writable("newFolder/students.txt")){
//     file_put_contents(("newFolder/students.txt"), " Hello php summer Training  \n", FILE_APPEND);  

//   }  
//   else{
//     echo "file is not writable <br>";
//     echo "File Content : ",file_get_contents("newFolder/students.txt"); 
//   }
// }

// // get file size===>filesize("newFolder/students.txt")
// echo "<br> File Size : ",filesize("newFolder/students.txt")," bytes <br>";



//=========> Read data from file using fopen() , fread() , fclose() 

/**
 * check file already exist or not
 * read ==>check file size >0
 * 
 * write ===> 
 * check file is writable or not
 * append || override
 * file close
 */


//========================= read file content
// if(file_exists("newFolder/students.txt")){
//     $myFile=fopen("newFolder/students.txt","r") ;
//     $myFileSize=filesize("newFolder/students.txt");
//     // $myFileContent=fread(($myFile),30);

//     if($myFileSize>0){
//      $myFileContent=fread(($myFile),$myFileSize);
//     echo $myFileContent;
//     fclose($myFile);
//     }else{
//         echo "file is empty <br>";
//     }



// 
// delete file

// if(file_exists("newFolder/students.txt")){
//     unlink("newFolder/students.txt");
//     echo "file deleted successfully <br>";
// }
// else{
//     echo "file not exists <br>";
// }   

/**
 * Error handeling  ==> @===> to ignore the error message
 * ==> or use die("message") to show message and stop execution
 */


// @unlink(("newFolder/students.txt")) or die("file not exists");  // if file not exists show message and stop execution
// if(file_exists("newFolder/students.txt")){
//     unlink("newFolder/students.txt");
//     echo "file deleted successfully <br>";
// }
// else{
//     echo "file not exists <br>";
// }   



// === append data to file using fopen() , fwrite() , fclose()

var_dump(($_POST));
exit;
if (file_exists("newFolder/students.txt")) {
    $myFile = fopen("newFolder/students.txt", "a+");
    // var_dump($myFile);
    if (is_writable("newFolder/students.txt")) {
        fwrite($myFile, "php summer training students \n");
        fwrite($myFile, "Names: \n");
        fclose($myFile);
        echo "data added successfully <br>";
    } else {
        if (filesize("newFolder/students.txt") > 0) {
            echo "file is not writable <br>";
            echo "File Content : ", file_get_contents("newFolder/students.txt");
            fclose($myFile);
        } else {
            echo "file is empty <br>";
        }
    }
} else {
    echo "file not exists and it will be created <br>";
    file_put_contents(("newFolder/students.txt"), "");
}
