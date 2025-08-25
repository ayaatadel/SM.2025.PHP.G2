console.log("hello");

/** multi line 
 * comment // 
 * varibles ==> place in memeory 
 * var variable_name 
 * 
 * Rules 
 * _ 
 * small (capitalize) userName user_name 
 * 
 * print ==> console ==> console.log()
 * 
 * 
 * js : loosely typed lagngaue ==> language doesn't  give variable  data type ==> it know data type of variable from its value
 */

// var userName="iti" 
// var userEmail ="iti@gmail.com"
// var userAge=30
// var isStudent=true
// var courses=["js","html","css"]
// var tracks={
//     name:"os",
//     id:1
// }
// var x;
// // =============  
// console.log("User Name : " +userName);
// console.log("User Email : " +userEmail);
// console.log("User Age : "  +userAge);
// console.log("*--------------------------*");

// console.log(`User Age : ${userAge}` );

// // type of 
// console.log(typeof(userEmail));
// console.log(typeof(userEmail));
// console.log(typeof(userAge));
// console.log(typeof(isStudent));
// console.log(typeof(courses));
// console.log(typeof(tracks));
// console.log(x);
// console.log(typeof(x));


// ==============


// x="5"  // parsing from string to number

// x=Number(x)
// console.log(x);
// console.log(typeof(x));

// data types
//string
// number 
// boolean
// object
// null 
// undefined 

//------------------ operators -------------------- 
// arethimatic operator  (+,-,*,/,%)

// var num1=10;
// var num2=5

// console.log(num1+num2);// 15
// console.log(num1-num2);// 5
// console.log(num1*num2);// 50
// console.log(num1/num2);// 2
// console.log(num1%num2);// 0

// 10%3=  10/3 = 3|| 3*3 =9 ===> 10-9=1
// 10%5=  10/5 = 2|| 2*5=10 ==> 10-10 =0
// 7%2=  7/2=3 || 3*2=6 ===> 7-6 =1

// ====================
// + ===> numbers ==> summation 
// + ===> string ==> concatination
           
//  console.log(10 + "iti");// 10iti 

//  console.log(10+"5");//105


// logical operator    ==> operator 
// &&    (10>5) && (3>2) ===> true && true ==> true
// ---------- true && true = true  ==========> 
// ---------- true && false = false
// ---------- false && true = false
// ---------- false && false = false
// ||      ===> (10<5) || (3>2)  ==> false || true ==> true
// ---------- true || true = true  
// ---------- true || false = true
// ---------- false || true = true
// ---------- false || false = false  ==========> 
// ! ===> true==> false
// ! ===> false=> true


/// falsey values   0   null  undefined  ==> false 
// truthy values    any number except 0   ==> true

// console.log(typeof(0 && 1));
// console.log(0 && 1);
// console.log(1 && 1);
// console.log(0 || 1);
// console.log(1 ||1);

// console.log(null && 5);
// console.log(null || 5);

// console.log(undefined && 5);
// console.log(undefined || 5);



//=========== comparison operators 
// < > >=  ==  ===  !=   !==

// ==  (value)          === (value , data type)   ==> comparison 
// !=           !==


// var x=5
// var y="5"
// console.log(x==y);   // true  ==> value :5
// console.log(x===y);  // false ==> value : 5 || data type (string ,number )


// // var x=1
// // var y=true 
// // console.log(x==y); // true
// // console.log(x===y);
//             //  true     &&     false    ==> false ==> !false = true
// console.log((x==y)&&(typeof(x)==typeof(y))); // ===

// console.log(x!=y); // value    // false 
// console.log(!(x==y));

// console.log(!(x==y)); // value || datatype  // true
// console.log(!((x==y)&&(typeof(x)==typeof(y))));

//========================= control flow 
/**
 * if 
 * if else 
 * if elseif else 
 */

// variable (define ==> var x) (asfignmaent ==> x=5)
//---------------------------------- Assignment
// x=10;// if x=5  ==> x=5|| if(x=any number except 0)==> if(true) ||if(x=0)==>if(false)
// if(x=0)  // if(false)
// {
//     console.log(x);   /// true
    
// }
// if(x=11)  // if(true)
// {
//     console.log(x);   /// true  ==> value of x (condition)
    
// }


// -------------------- comparison
// if(x==5)
// {
//     console.log(`true: ${x}`);
    
// }else{
//     console.log(`false: ${x}`);
    
// }

// var grade=50;
// if(grade>50){
//     console.log(`Your are Succes ${grade}`);
    
// }else{
//     console.log(`Your are fail ${grade}`);
// }


// if(grade>50){
//     console.log(`Your  ${grade} more than 50 `);
    
// }else if (grade<50){
//     console.log(`Your  ${grade} less than 50 `);
// }else {
//      console.log(`Your  ${grade} equal  50 `);
// }


// var grade="A"


// if(grade=="A")
// {
//     console.log("degree >=85");
    
// }else if (grade =="B")
// {
//      console.log("degree >=75 and grade < 85");
// }else if (grade =="C")
// {
//      console.log("degree >=65 and grade < 75");
// }
// else if (grade =="D")
// {
//      console.log("degree >=50 and grade < 65");
// }else{
//       console.log("degree <50  sorry You fail");
// }


//---------------- switch 

// var grade="f"
// switch (grade) {
//     case "A":
//           console.log("degree >=85");
//         break;   // if condition true (stop)
//     case "B":
//               console.log("degree >=75 and grade < 85");
//         break;
//     case "C":
//           console.log("degree >=65 and grade < 75");
//         break;
//     case "D":
//      console.log("degree >=50 and grade < 65");
//         break;
//     default:
//               console.log("degree <50  sorry You fail");
//         break;
// }
 // break  ==> exist of block of code  
 // continue  ==> skip step then you go next step
 //  exit  stop execute of prorgamm


//  ======================  ternary operator (expression)?true:false
// var grade=50;
   // expression           true (if)        false (else)
// (grade>60)?console.log("succes"):console.log("fail");
//  if  ()                                else if (       )               else
// (grade>50)?console.log("grade > 50 "):(grade==50)?console.log("grade=50"):console.log("grade<50");


// loops   ===> repeat 
// for (initialValue ; condition;incremen, decrement) {
// }

/*********************************************
 * pre increment   ++++     ++x
 * post increment      x++
 * pre decrement  ----
 * post decrement
 */


// var x=5
//   // ==  llog(x++)  ==> log x then x=x+1
// console.log(x++);   // 5 6
//   // ==  llog(++x)  ==> x=x+1 || log(x)
//   console.log(++x);   //6+1=7 // 7
  

// console.log(x--);5  //  4   --> log(x)  ==> x=x-1
// console.log(--x);   //3 ==> 3   ==> x=x-1  ==> log(x)



  // first time
///////////////////// for(;;)  ==> infinity loop
// var x
// for(x=0; x<5 ; )
// {
// console.log(x);
// console.log("*****************");
// if(x==3)
// {
//     console.log("x=3");
    
// }
//   x++
// }


/////////// while(condiltion) {true of condition}
var x=6;  // for only first time
// while(x<=5)
// {
//     console.log(x);
//     console.log("**********************************");
//     x++;
    
    
// }
////////////////////////// do while
// do {
//     // execute 
// } while (condition);
// do {
//     console.log(x);   // 6 5  4  3  2  1 0
//     console.log("*************");
//     x--;
    
    
// } while (x>=0);

///////////////////////// console 

// browser 

// prompt   ==> take value from user
// alter   ==> 
// confirm   ==> yes (true)  || cansel (false)


// var userName=prompt("enter your name")   // data type (string)
// // var userage=Number(prompt("enter your age"))   // data type (number)
// var userage=+prompt("enter your age")   // data type (number)
// console.log(userName);
// console.log(userage);
// console.log(typeof(userName));
// console.log(typeof(userage));


// alert("your are delteing your acccount")

// confirm ===> ok ==> true || cansel ===> false

// var result=confirm("are sure that you u want to delte this page")  
// // console.log(result);
// // console.log(typeof(result));

// if(result)
// {
//     alert("you account is deleted")
//     // code logic 
// }else{
//     alert("your account are safe")
// }


// ====================

// document.writeln("Hello Track Php Summer Training")
document.writeln(`<h1 style='color:red;text-align:center'>Hello Track Php Summer Training <h1>`)


/**
 * eneter name 
 * enter age 
 * enetr address
 * enter email 
 * 
 * =================> document
 */

// var userName=prompt("Enter Your Name");
// var userAge=+prompt("Enter Your Age");
// var userEmail=prompt("Enter Your Email");
// var userAddress=prompt("Enter Your Address");


// document.writeln(`<p style='color:red;text-align:center'><span style='color:black'>user Name </span> : ${userName}</p>`)
// document.writeln(`<p style='color:red;text-align:center'> <span style='color:black'> user Age </span>: ${userAge}</p>`)
// document.writeln(`<p style='color:red;text-align:center'> <span style='color:black'> user Email </span>: ${userEmail}</p>`)
// document.writeln(`<p style='color:red;text-align:center'> <span style='color:black'> user Address </span>: ${userAddress}</p>`)


// =================
// for (var x=1;x<7;x++) {
// document.writeln(`<h${x}> Hello  </h${x}>`)
// }


/**                   
 * are you student  ==>t=> are u in cs ==> list  html , css ,js
 * are you student  ==> no ==>  sorry this page for students
 * are you student  ==>are u in cs ==> no ==> sorry this page for cs students
 */

var result = confirm("are you student")
if(result)
{ var st=confirm("are you in cs")
    if(st)
    {
        document.writeln(`
            <ul>
            <li>
            html
            </li>
            
            <li>
            css
            </li>
            <li>
            js
            </li>
            </ul>
            
            `)
    }else{
         document.writeln(`<p> sorry this page for cs students </p>`)
    }
}else{
            document.writeln(`<p> sorry this page for students </p>`)
}

