<?php
echo "<h1 style='color:red; text-align:center'> Day1 PHP   </h1>";

// // comment 
// //signle line
// #single line 
// /**
//  * multi line comment
//  */
// # dexleration = assignment
// // // variable   ==>$varName=Value  
// // $x=5;
// // echo $x ,"<br>";
// // # php is losely typed language 
// // echo gettype($x) , "<br>";
// /**
//  * integer
//  * string
//  * float 
//  * double
//  * array
//  * object
//  * null
//  */

// // $str="php summer training <br>";
// // echo gettype($str),"<br>";
// // print($str);

// // echo($str);

// /**
//  ** ==============> can't deal with array
//  * print || echo ==> printing statements
//  * echo ==>  multi parameter ==> echo __ ; with out 
//  * print ==> single parameter 
//  * 
//  * ====> deal with array ==> var_dump , print_r 
//  * 
//  */


// // $numbers=[1,2,3];
// // echo $numbers;  ===>xxxxx error xxxxxxx ==> array to string converstaion

// // print($numbers);  ===>xxxxxx error xxxxxx ==> array to string converstaion

// // var_dump($numbers);
// # datatype(length)({  [index => datatype(value)  ]})
// //array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

// // echo "<br>";
// // # datatype({  [index => (value)  ]})
// // print_r($numbers); // Array ( [0] => 1 [1] => 2 [2] => 3 )

// // echo "<br>";

// // // constant variable ==> varible that its value doesn't change

// // define("PI",3.14);
// // echo "<br>", "PI : ",PI;

// // const TRACK_NAME="php";

// // echo "<br>", "TRACK_NAME : ",TRACK_NAME;


// // casting ==> convert from dataType to another dataType 
// // echo "<br>******************************** <br>";
// // $y="5";
// // // echo "<br>",gettype($y);
// // var_dump($y);
// // echo "<br>";

// // settype($y,"integer");
// // // echo "<br>",gettype($y);
// // var_dump($y);
// // echo "<br>";
// // $y=(string)$y;
// // echo "<br>";
// // var_dump($y);
// // echo "<br>";
// // var_dump($y);


// // print($y);
// // print($y);

// // 
// // $result=true; //1
// // $result=false; // not any thing
// // echo "<br>" ,"result : ",$result ,"<br>";
// // echo gettype($result) ,"<br>";
// // print($result); // false :  not any thing
// // echo "<br>" ,"result : ";
// // var_dump($result) ;// result : bool(false)
// // echo "<br>" ,"result : ";
// // print_r($result);  // false :  not any thing

// // $var1=null;

// // echo "<br>" ,"var1 : ",$var1; // Null :  not any thing
// // echo "<br>" ,"var1 : ";  
// // var_dump($var1);  // value


// /**
//  * Operators 
//  * arithematic operators  (+,-,*,/,%)
//  * logical operators
//  * assignment operators (comparison operators)
//  */

// $x = 5;
// $y = 3;
// $z = 12;

// echo "$x+$y = ", $x + $y, "<br>";  // 8
// echo "$x-$y = ", $x - $y, "<br>";  // 2
// echo "$x*$y = ", $x * $y, "<br>"; // 15
// echo "$x/$y = ", $x / $y, "<br>";  // 1.6
// echo "$x%$y = ", $x % $y, "<br>";   //2  ==> 5/3 = 1 => 1*3=3 ==> 5-3=2
// echo "$x**$y = ", $x ** $y, "<br>"; //125  ==> 5^3 =125 ==> 5*5*5


// /**
//  * &&  ==> true ==> if all conditions are true
//  * ||  ==> true ==> if any condition is true
//  * !   ==> revers  ==> true ->  false || false -> true
//  */
// echo "<br>************ logical Operators ***********<br>";
// // echo  "<br>value:", ($x > $y) && ($z > $x);
// // echo  "<br> value:", ($x < $y) && ($z > $x);
// // echo  "<br>value:", ($x > $y) || ($z > $x);
// // echo  "<br> value:", ($x < $y) || ($z > $x);
// // echo  "<br> value:", ($x < $y) || ($z < $x);
// // echo  "<br> value:", !(($x < $y) || ($z < $x));
// // echo  "<br> value:", !(($x > $y) || ($z > $x));

// echo "<br>************ comparison operator ***********<br>";

// /**
//  * >
//  * <
//  * >=
//  * <=
//  * <>  --> not qeual 
//  * =  --> assign 
//  * == --> compare values
//  * ===  --> compare values and data types
//  * !=   --> not equal ---> value
//  * !==  --> not equal ---> value and datatype
//  */


// // $x=5;
// // $y="5";

// // echo "<br> result :" , $x==$y; //   if(x==y)
// // echo "<br> result :" , $x===$y;  // if(x==y) && type(x)==type(y) 

// // $x=1;
// // echo "<br>" ,"result :", $x++; //1   ==> 1 --2
// // echo "<br>" ,"result :", ++$x; // 3  ==> 3  -- 3
// // echo "<br>" ,"result :", --$x;  // 2 ==> 2 --2
// // echo "<br>" ,"result :", $x--;  // 2 --> 2   1

// /**
//  * conditional statements
//  * 
//  * if , if else ,  if elseif else
//  * 
//  */
// echo "<br>************ conditional statements ***********<br>";


// $grade=40;
// if($grade>=50)
// {
//     echo "succes";
// }

////=================================
// if($grade>=50)
// {
//     echo "succes";
// }else{
//       echo "fail";
// }

//=============================
// $grade=60;

// if($grade>=85)
// {
//     print("A");
// }
// elseif($grade>=75)
// {
//   print("B");  
// }
// elseif($grade>=65)
// {
//   print("B");  
// }
// elseif($grade>=50)
// {
//   print("C");  
// }
// else{
//     print ("fail");
// }


// ============= ternary operator
// $grade=60;
// echo ($grade>=50)?"success":"fail";
// ($grade>=50)?print("success"):print("fail");
// ($grade>=50)?var_dump("success"):var_dump("fail");

// echo ($grade == 50) ? "50" : (($grade > 50) ? "more than 50" : "less than 50");

// echo "<br>******************** Loop **************** <br>";

// for($i=1;$i<=6;$i++)
// {

//   echo "<h$i> ITI </h$i>";
// }
// $i=1;
// while($i<=6)
// {
//     echo "<h$i> ITI </h$i>";
//     $i++;
// }


/**
 * break  ==>  ==> stop run of code (line) but no stop execute of code 
 * continue  ==> skip step that u are in 
 * exit   ==> stop run of program
 */
// $i=1;
// while($i<=6)
// {
//    if($i==3)
//    {
//       $i++;
//     //    continue;
//     // exit;
//     break;
//    }else{
//     echo " <br >value :$i <br>";
   
//    }
//     $i++;
// }
// $i=5;

// do{
// echo "<br> value : $i";
// $i--;
// }while($i>=1);


echo " <br>************** Array *************** <br>";

$names=["mahmoud","ahmed","mohammed","mostafa","hossam"];
$ages = array(25,30,18,26);

// array ==> index (start => 0) , length (number of array elemnts) ===> value =(arr_Name[index])

/**
 * get length os array ==> count (arrName)
 * 
 * Indexed Array ==> index
 * one dimension array ==> $arr_Name[1,2]
 * multi dimension array =>$arr_Name[[1,2],[5,6]]
 * 
 * ===> add elemnts in array  ==> from start || from End
 * 
 * =============> Associative   Array
 */

// echo "<br >Hello ITI <br>";
// echo(count($names));
// var_dump($names); // 
// echo "<br>";
// print_r($names); // 
// for ($i=0; $i <count($names) ; $i++) { 
//     echo "Name : $names[$i] <br>";
// }
// for ($i=0; $i <count($ages) ; $i++) { 
//     echo "age : $ages[$i] <br>";
// }



// ====================

// $matrix=[[1,2],[3,4]];
// for ($i=0; $i <count($matrix) ; $i++) { 
//     # code...
//     // echo $matrix[$i];
//     // print_r($matrix[$i]);  // array 
//     echo " <br>********** first Row : **********<br>";

//     for ($j=0; $j <count($matrix[$i]) ; $j++) { 
//         # code...

//         echo "<br> <br>";
//         print_r($matrix[$i][$j]);
//     }
// }


// ================== Add Elemnets in Array
// $names=["php","mysql","laravel","html","css","js"];
// $names[2]="Angular";
// $names[20]="React";
// $names[0]="React";
// array_push($names,"laravel"); // add from last
// array_unshift($names,"Js");  // add from start
// print_r($names);

// //================ remove elemnt from array

// array_pop($names);  // remove from end
// echo "<br>";
// print_r($names);
// echo "<br>";

// array_shift($names);
// print_r($names);
//============= ============= sort array  (Asci Code)
// $names=["php","mysql","laravel","html","css","js","Angular"];
// $ids=[1,2,3,4,5,6];
// echo "<br>";
// print_r($names);

// sort($names);  // affect on main array


// echo "<br>";
// print_r($names);

// //============= ============= revers sort array

// rsort($names);
// echo "<br>";
// print_r($names);
// === =============== merge between arrays
// $names=["php","mysql","laravel","html","css","js","Angular","bootstrap","react","react Js"];
// $ids=[11,12,13,14,15,16,17,20,120];
// echo "<br>";
// print_r($names);
// echo "<br>";
// print_r($ids);
// // $newArr=$names+$ids; 
// $newArr=array_merge($names,$ids,["ITI","Track Python","Track PHP"]);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// print_r($newArr)

//  echo " <br>********** Assoicative Array : **********<br>";
// /**
//  * "Key" => value
//  * 
//  * ksrot  ==> sort depend on key
//  * krsort ==> resvers sort depend on key
//  * 
//  * print============> array as fort effect on main array
//  * 
//  */

// $names=["php","mysql","laravel","html","css"];
// $ids=[1,2,3,4,5];

// $data=[
//     "course"=>"php",
//     "id"=>1,
//   "description"=>"Back End Course",
//   "dependances"=>["mysql","html","css","js"]
// ];

// array[key]

// echo $data['course'] ,"<br>";
// print_r ($data['dependances']) ;//
// echo "<br>",$data['description'] ,"<br>";

// print_r($data);
// echo "<br>";
// sort($data);  // value 
// rsort($data);  // value 
// print_r($data);
// echo "<br>****************** <br> ";
// $newArr=ksort($data);  // key
// print_r($newArr);
// $newArr=krsort($data);  // key
// // var_dump(krsort($data,true));
// print_r($newArr);
// print_r($data);
// echo "<br>";

$person=false;

// var_dump($person);
// unset($person); // remove variable 
// var_dump($person);

// isset ==> check if variable has value  (value ==> true)

// var_dump(isset($person));
var_dump(empty($person));//  ==> check if variable has no value ==> false values

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day1  PHP </title>
</head>
<body>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ea provident amet architecto optio nulla odit impedit perferendis repellendus asperiores explicabo, ex neque voluptatem? Consequuntur illum vel nihil voluptate ullam.
    </p>

    <?php
    echo "<h2> Test Code </h2>"

    ?>
</body>
</html> -->