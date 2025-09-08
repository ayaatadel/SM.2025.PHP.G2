<?php
// functions ===> Block of code u can use it in any place by call function

// /**
//  * user defined function => user write depened on its needs
//  * 
//  * ======>
//  * regular function || declared function ==> function fun_name(){}
//  * expression function   ==> $var=function (){}
//  * calBack function ==> function called in another function 
//  * 
//  * ==========>
//  * declared function ==> already function declared ===> push , pop , count
//  */

// //  $name="iti";
// //  $track="open source";
// //  $track??" ITI Menoufia";

// // function getData($name ="Organisation Name",$track="Track Name")
// // {
// //     // global $name;
// //     // global $track;
// //     echo "<h1> $track : $name   </h1>";
// // }

// // $track=$track??"track Name";
// // $name=$name??"iti";
// // function getData($name="iti",$track="track Name")
// // {
// //     // global $name;
// //     // global $track;
// //    return "<h1> $track : $name   </h1>";
// // }

// // echo getData();


// // function sum()
// // {
// //     echo 1+2;
// // }

// // // Call Back Function
// // $result=function ($name,$track="track Name"){
// //     // global $name;
// //     // global $track;
// //    $name();
// //    sum();
// //    return  "<h1> $track   </h1>";
// // };

// // echo $result(function(){
// // echo "hello";
// // },"test")
// // ;




// // ===============================

// // function x()
// // {
// //     echo "Hello";
// // }

// // function y($greet,$trackName)
// // {
// //     // $greet();
// //     $greet;
// //     return $trackName;
// // }

// // // y(function(){
// // //     echo "test function";
// // // },"test");
// // echo y(x(),"PHP");

// // $graet=x()
// // $greet=function(){
// //     echo "test function";
// // };
// // $trackName="test";


// // $personName="user name";
// // $personAge="user age";


// /**
//  * oop ==> object oriented programming
//  * reuse code || handle code 
//  * object ==> properities , methods(functions)   ==> structure (class)
//  * 
//  * princibles   
//  * ===> inheritance 
//  * ===> encabsulation
//  * ===> polymorphism
//  * ===> abstraction
//  * 
//  * 
//  * 
//  * Access Modifire ==> 
//  * public  ==> acess inside , outside class , inheritance
//  * protected ==> acess inside,can be inheritened
//  * private ==>acess inside ,can't be inheritened
//  */

// class Person
// {
//     public $name; // properities 
//     protected $age;
//     // private $age;


//     function __construct($name = "userName", $age = "userAge")  // constructor of class 
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function printPersonData()
//     {
//         echo $this->name;
//         echo $this->age;
//     }
// }

// $p = new Person("ayaat", 25);
// $p2 = new Person("test", 30);


// // var_dump($p);
// // var_dump($p->name) ;
// // var_dump($p->age) ;
// // $p->address="cairo";
// // echo $p->printPersonData();
// // echo "<br>";
// // var_dump($p);

// // oop prinncibles 
// # inheritance  ==> parent => child

// /**
//  * single inheritance  ===> yes
//  * multi level inheritance  ==> yes
//  * hichrachial inheritance  ==> yes (self study)
//  * multible inheritance ===> no
//  * hypried inheritance  ==> no
//  */

// class human extends Person
// {  // single inheritance
//     public $email;
//     public $address;

//     function __construct($name = "humanName", $age = "humanAge", $email = "humanEmail", $address = "humanAddress")
//     // function __construct($email="userEmail",$address="UserAddress")
//     {
//         // $this->name=$name;
//         // $this->age=$age;
//         parent::__construct($name, $age);
//         $this->email = $email;
//         $this->address = $address;
//     }
//     function printHumanData()
//     {
//         parent::printPersonData();
//         echo "<br>", $this->email, "<br>", $this->address;
//     }
// }

// /**
//  * function Name(parameters) ===> signature 
//  */

// class Child extends human
// {

//     public $company;
//     private $phone;
//     const DB = "OS";
//     static $count=0;

//     function __construct($company = "childCompany", $name = "chlidName", $age = "chlidAge", $email = "chlidEmail", $address = "chlidAddress")
//     {
//         parent::__construct($name, $email, $address, $age);
//         $this->company = $company;
//         self::$count++;
//     }
//     // function test()
//     // {
//     //     echo "hello";  // logic

//     // }
//     //** Over loading ==> not acceptd in php */

//     // function test()
//     // {
//     //     echo 1+2;
//     // }




//     //================ Overriding
//     function printHumanData():void
//     {

//         // echo Child::DB,"<br>";
//         // self refer to class
//         echo self::DB, "<br>";
//         echo self::$count, "<br>";
//         echo $this->company ,"<br>";
//     }


//     // Encapsulation ===> save data (private)==>set, Get
//     function setPhone($phone)
//     {
//         $this->phone = $phone;
//     }

//     function getPhone():string
//     {
//         return $this->phone;
//     }
// }


// // $h=new human();
// // $h->age=30;
// // var_dump($h);

// // $ch = new Child("010259552741", "ITI");
// // $ch2 = new Child("010259552741", "ITI");
// // $ch3 = new Child("010259552741", "ITI");
// // $ch3 = new Child("010259552741", "ITI");
// // $ch3 = new Child("010259552741", "ITI");
// // // $ch->printHumanData();
// // $ch->setPhone("01002011428");
// // echo $ch->getPhone();
// // echo $ch->printHumanData();
// // echo "<br>";
// // $ch->printPersonData();
// // var_dump($ch);



// /**
//  * Polymorphism 
//  * 
//  * overloading (not accepted in php) ==> same name ==> chang in parameter or data type ==> in same class  
//  * ===> change in signature (compile)
//  * 
//  * 
//  * ***********************************
//  * overriding  (accepted in php)==> same name => change in logic  ==> inherited classses  (run time)
//  * 
//  * ===> signature doesn't have any change
//  * 
//  */



// // Abstraction ========> Abstract class
// /**
//  * can not be inherit 
//  * can not take object
//  */

// abstract class Test extends Child{
//     Public $id;

//     function printId()
//     {
//         echo $this->id;
//     }
//      function printHumanData():void{
//         echo $this->id;

//      }
//      function getPhone():string{
//         return "Hello From abstract class";
//      }

//      abstract function data():void;
//      abstract function data2():string;
// }



// // $t=new Test(); ==> error

// // var_dump($t);


// interface Text{

//     function inter():void;
//     function sayHello():string;
// }
// interface Text2 extends Test{

  
// }


// class Dumy implements Text{
//    function inter():void{

//    }
//    function sayHello():string{
//     return "";
//    }
// }



namespace test;
class Model{

}
trait Migrate{

    public $name="php";

}

class controller{

}
namespace test2;

class Model{

}

class controller{

}

use  test\Migrate;
class Data{
  use Migrate;
}



class Car{

}

class Engine {
    
}
// car ==> engine 
