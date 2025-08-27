

hello(10,12)
function hello (y,x)   //delecration ===> accept hoisting (use aby thing before declare)
{
    console.log(y);
    console.log(x);
    console.log("hello");
    
}
console.log(x); 

console.log(x);  // error


// ===============
var x="php"
function hello ()
{
    var y="python";
    var x="test"
    x=y;
    console.log(x);
    return "hello ST"
}

var result=hello()//  helloSt

console.log(y);
console.log(x);
console.log(result);

// ==================
var x="php"

function hello ()
{
    var y="python";
    var x="test"
    x=y;
    console.log(x);
    return "hello ST"
}

var result=hello
console.log(x);
console.log(result);

////////////////
function sayHello(test,...w)
{
    console.log(test);
    
    console.log(arguments);
    console.log(...w);
    
    console.log("hello");
    
}

var great=function(trackName)
{
    console.log("welcome");
    // console.log(trackName); 
    return sayHello(trackName ,"reset") // void =>undefined
    
}
console.log(great("php")
);

 
// welcome  php hello undefined 





/**
 *  log function void ==> output+ undefined 
 *  call ==> output
 */


// =================
// self invoked function
//  immediatly invoked function

// (
//     function (){
//         // call api || connection
//         var x=10;
//         console.log(x);
        
//     }
// )();

var x=15;
(
    function (y){
        x=y
        console.log(x);
        
    }
)("php");  // php php
console.log(x);
console.log("******************");

/**
 * x=php
 *  
 * ========= php 
 * =========  php 
 * ****************** 
 */


var x=15;
(
    function (x){
      
        console.log(x);
        // 15 php 
    }
)("php");  // call
console.log(x);


/**
 * x=15
 * fun(x=php  ) xxxxxxxxxxxx
 *  =============php 
 * === 15
 * 
 */
