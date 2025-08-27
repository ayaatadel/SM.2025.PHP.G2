document.writeln(`<h1 style='color:red; text-align:center'> Day 2 JS  </hl> <br>`)

/**
 * Functions  ==> block of code ==> reuse code in more spaces 
 * ===> complex ===> cut into more pices ==> logic 
 * 
 * 
 * function fun_Name(paremters(if exist)){ logic of code }
 * 
 * function prametarized || function non-prametarized
 * 
 * ===> use function ==> call ==> fun_name(p||xx)
 * return ===> return (value that function return)
 * 
 * 
 * ===========> void ==> function hasn't return  ===> log (print undefined)
 * ===========> return ==> function has return  ==> function has only on return statemet
 * 
 * 
 * function fun_n(){} // decleration function 
 * 
 * ====> types of function
 * 1- function decleration
 * 2- function expression  var x =function fun_n(){}===> call ==> x()
 */


// var x=5;
// var y=10;
// document.writeln(x+y);
// document.writeln(7+10);


// function print()
// {
//     console.log("hello");
//     // 
// }

// print()
// ///////////////////////////////////
// function printData()
// {

//    return "hello return function"
// }


// console.log(printData());
// ======================================
/**
 * 
 *  js engine  ==> run ==> 
 * x: undefined  ===========> new value
 * y:undefined   ===========> new value
 * 
 * ================== prametars of function 
 * 
 * (x,y)  ===> (1,2) ==> x=1 , y=2
 * (x,y)  ===> (1,2,5) ==> x=1 , y=2 ,5===> value with no parameter
 * 
 * function (pp)==> arguments
 * ==> reset values , reset paramertsers ===> resetParams (...w)  ==> array =>ES6
 */


// function sum(x=5,y=10,...w)
// {
//     // console.log(arguments);
//     console.log(w);
    
//     console.log(x);  // ===> undefined
//     console.log(y);  // ===> undefined
//     /////////////////  not a number 
//     /// undefined ==> process 
    
//     console.log(x+y);  // undefine + undefined  ==> NAN
    
// }
// sum()
// sum(5,1,10,11)



//////////////////////////////////////////// types of function 
// function print()
// {
//     // console.log("hello");   // hello   undefined

//     return "hello";
// }

// console.log(print());  // call method || print return of function
// // console.log(print);  // structrure of function 


// var x=function print()
// {
//      return "hello";
// }

// console.log(x());


/**
 * arrow function
 */

// var x=(y,z)=>
// {
//      return y+z;
// }

// console.log(x(2,1));

// var x=_=>   // arrow function doesn't have any parameters
// {
//      return y+z;
// }
// var x=w=>   // arrow function have one parameter
// {
//      return w;
// }

// console.log(x(5));


// var x=(y,z)=>y+z   // arrow function in one line
// console.log(x(5,2));



/// self invoked function 
// (function() {
//      return "iti";
// })();


//================================
// string api   ==> methods we use with string 
// ================
// length (n of c of string) ==> character ==> index   ==> get string length
// 0  , length-1
//  get charcter ==> (x : string , 0==>index )==>x[0] , x[1]

// console.log(x);
// console.log(typeof(x));


// length
// console.log(x.length);
// for (let i= 0; i< x.length; i++) {
//    console.log(x[i]);
// }



// console.log(x.toUpperCase());
// console.log(x.toLowerCase());

// console.log(x.charAt(5)); // get chacter from its position
// console.log(x.includes("source"));

var x="    Iti Open source branch   "
// // var UserName =prompt("enter your name").toLowerCase();

// // console.log(x.toLowerCase().includes(UserName));
// // reasign
// x=x.concat(" php summer traing")
// x=x+" test"
console.log(x);

// console.log(x.trim());
// console.log(x.trimStart());
// console.log(x.trimEnd());
// console.log(x.padStart(40,"********"));
console.log(x.padEnd(40,"********"));


// ===========================================
// array api   ==> methods use with array
//  take any types of data type


// length => number of items 
// j==> start with number 0 || end ==> length-1
// var arr=["iti","hello",1,true,[1,23]]
// console.log(arr[0]);
// console.log(arr[1]);
// console.log(arr[2]);

// console.log(arr.length);
// add item on array ==> from start , from end 

// arr.push("php") // add from end
// console.log(arr);


// arr.unshift("summer training") // add from strat
// console.log(arr);

// // remove item
// arr.pop()  //  remove item rom end
// console.log(arr);

// arr.shift()
// console.log(arr);

var arr=["iti","hello",1,true,[1,23]]

// for (let index = 0; index < arr.length; index++) {

//      console.log(arr[index]);
     
// }


// console.log(arr[4][1]);
// // one dimension   ==> one column ||| one row
// // two di,ension array ==> 2*2  , 3*3

// arr=[[1,2],[3,4,5]]

// for (let index = 0; index < arr.length; index++) {   // rows (array)
// //  console.log(arr[index]); /// row array
//  for (let j= 0; j< arr[index].length; j++) {  // elements in array
//     console.log(arr[index][j]);
    
//  }
    
// }

var arr1=[1,2,3];
var arr2=[7,4,5];
// var x;
// x=arr1.concat(arr2)
// console.log(arr1+arr2);
// console.log(x);
// arr1=arr2;  // two pointer point to same place
// arr2=arr1
// arr1.push("test")
// arr2.push("arr2")

// console.log(arr2);  //
// console.log(arr1);

// arr1 =[...arr2]  /// copy   // spread operator  // each pointer spread
// arr1.push("hello")
// console.log(arr2);

// console.log(arr1);

// var arr3=[...arr1,...arr2]
// console.log(arr3);



// =======================================
 /***
  *  var ===> undefined 
  * var ==> change in value
  *    // hoisting ===> in js ==> enable u to use variables before initialize
  * ===> hoisting with var
  * 
  * ===============================>
  * var 
  * let   ====>ES6
  * const ====>ES6
  */

// var x=5;
// x="test"; /// reasignment
// var x="iti"  // redeclaration 
// console.log(x);


// let ==> key work we use in declation of variable
// reasignment  ==> can give variable new value
// doesn't accept redeclation
// doesn't accept hoisting ==> error access 'bvar_name' before initialization
// 
// console.log(x);

// let x=10;
// x=15;
// x="hello";
// // let x="test";
// console.log(x);


console.log(PI);

const PI=3.14;
/**
 *doesn't accept reAsignment
 *doesn't accept redeclation
 *doesn't accept hoisting ==> error can't access 'var_name' before initialization
 */

console.log(PI);





//////////////////////////
// test()   // decleration accept hoisting
// function test()
// {
//     console.log("tes");
    
// }

// result()
// var result=function printDta()  //Expresson function doesn't accept hoisting
// {
//     return "hello"
// }









