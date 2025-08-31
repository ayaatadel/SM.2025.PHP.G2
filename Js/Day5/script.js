// function print() {
//   //  function synchronous
//   console.log("first");
//   second();

//   setTimeout(() => {
//     setTimeout(
//       () => {
//         console.log("hi");
//       },0);

//       console.log("hello");
//   }, 0);

// }
// function second() {
//   console.log("second");
// }
// print();

/// Asynchrounous Function  ==>   setInterval ==> repeat code after time
// setTimeOut  // execute code after time
// setTimeOut ==> callBackHell==> promise

//  var interval= setInterval(()=>{
//  console.log("hello");

//     },1000)

//    setTimeout(()=>{
//  clearInterval(interval)
//    },10000)

// =========================================
/**
 * ((fun1,fun2)=>{
 * fun1  (resolve)===> success
 * fun2  (reject)===> reject
 * =========> pending
 * })
 */

// let promise=new Promise((f1,f2)=>{

//     console.log(f1());  // call back funcion  // success
//     console.log(f2()); // call back funcion // rejected

// })
// console.log(promise);

// promise.then(()=>{
// //  fun1  ==> success
// }).catch(()=>{

//     // fun2  ==> reject

// })

// let promise=new Promise((resolve,reject)=>{
//     var data=["php","python"]
//     let success=false;
//     if(success)
//     {
//         resolve(data)

//     }else{
//         reject("error not success")
//     }
// })

// promise
// .then((data)=>{
//     console.log(data);
// })
// .catch((e)=>{
//     console.log(e);
// })
// console.log(promise);

//=============== api ==> promise

// console.log(fetch("https://jsonplaceholder.typicode.com/users"));
// fetch("https://jsonplaceholder.typicode.com/users")
// .then((response)=>{
//     // console.log(typeof(response));
//     // response.json() // promise
//     // console.log(response.json());
//     return response.json()
// }).
// then((response)=>{

//     // console.log(response);
//     response.forEach(element => {
//         console.log(element);
//     });
// })
// .catch((e)=>{
//     console.log(e);

// })

//================================
// async function getUserData() {
//   try {
//     var result = await fetch("https://jsonplaceholder.typicode.com/users");
//     //    console.log(result.json());
//     var data = await result.json();
//     // console.log(data);
//     if (data && data.length > 0) {
//       console.log(data);
//     }
//   } catch (e) {
//     console.log(e);
//   }
// }

// getUserData();

/// bom  ==========> localstorage
// localStorage.setItem("name","php g2")
// localStorage.setItem("subject", ["php","python"])// string

// localStorage.setItem("subject", JSON.stringify(["php","python"]))
// // console.log(localStorage.getItem("name")
// // );
// console.log(typeof((localStorage.getItem("subject"))))
// console.log(typeof(JSON.parse(localStorage.getItem("subject"))))

document.cookie = "trackName=php";

document.cookie = `courseName=webDeveopment bootcamp; expires = Thu, 5 March 2030 12:00:00 UTC; path =/Day5/about.html`;
