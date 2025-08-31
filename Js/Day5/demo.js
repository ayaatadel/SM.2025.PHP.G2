// object

/**
//  * Object
//  */


// var obj1={
//     id:1,
//     name:"php",
//     // print:function()
//     // {
//     //     console.log(obj1.name);
        
//     // }
//    print() {
//         console.log("Hello");
        
//     }
// }

// // console.log(obj1.id);
// // console.log(obj1['name']);
// // obj1.print()

// // console.log(obj1);
// // console.log(Object.keys(obj1));
// // console.log(Object.values(obj1));



// // for(var i=0;i<Object.keys(obj1).length;i++)
// // {
// // document.writeln(`
    
// //     <span>${Object.keys(obj1)[i]} :</span>
// //     <span>${obj1[Object.keys(obj1)[i]]} </span>
// //     <br>
// //     `)
// // }

// var obj={}
//           // target    source
// // Object.assign(obj,obj1)
// // console.log(obj);
// // console.log(obj1);
// var defaultValues={
//     name:"userName",
//     age:"userAge"
// }
// // console.log(typeof(obj));
// // console.log(typeof(defaultValues));

// if(Object.keys(obj).length === 0)
// {
//  Object.assign(obj,obj1)
//  console.log(obj);
// }
// else{
//   console.log(obj);  
// }

// console.log(Object.entries(obj)); // key:value==>array


// // [ ['id', 1],
// //  ['name', 'php'],
// //  ['print', ƒ]]


//
var arr=[1,2,33]

// loop 
// for (let index = 0; index < arr.length; index++) {
//     console.log(arr[index]);
    
    
// }

// array api methods ==> foreach
/**
 * arrName.foreach((value,index,arr)=>{
 * ========= callBack Function
 * })
 */

// arr.forEach((value,index,test)=>{
// console.log("array index :",index);
// console.log("*********************");
// console.log("array value :",value);
// console.log("*********************");
// console.log(test);
// })

// let result=arr.map((value,index,test)=>{
//     // // return value 
//     // return index

//     if(value>100)
//     {
//         return value
//     }

// })


// return array ==> length=length(array that it map)
/**
 * map ==>condition ==> false ==> arr[all values is undefined]
 */

var result=arr.filter((value,index,test)=>{
    // // return value 
    // return index

    if(value>100)
    {
        return value
    }

})

/**
 * filter ==> return array (length = number of out values )
 * ==>condition ==> false ==> [] => empty array
 */

// console.log(result);
// var devices=[
//     {
//         id:1,
//         name:"lap",
//         price:15000
//     },
//     {
//         id:2,
//         name:"mobile",
//         price:10000
//     },
//     {
//         id:3,
//         name:"pc",
//         price:30000
//     },
// ]
// // loop array ==> device salary >10000

// var result=devices.filter((value)=>{
// // console.log(value);
// if(value.price>10000)
// {
//    return value  // array[]
    
// }

// })

// if(result.length>0)
// {
//     console.log(result);
    
    
// }else{
//     console.log("no devices");
    
// }


//======================
// var obj1={
//     id:1,
//     name:"php",
//    print() {
//         console.log("Hello");
        
//     }
// }
// for (const key in obj1) {
// //    console.log(key);
//    console.log(`${key} : ${obj1[key]}`);
   
   
// }

// var arr=[1,2,3]
// // object.keys(onjName) // array of keys of object

// for (let key in arr) {
// //    key ==> array :: index
//    console.log(`${key} : ${arr[key]}`);
   
   
// }

// for (var element of arr) {

//     // values in array
//  console.log(element);
    
// }


// ========== BOM
// BOM ===> Browser Object Model

// /**
//  * Window
//  * History
//  * Location
//  * Navigator
//  * Screen
//  */

// // var about=window.open("about.html","_blank","width:300px","height:300px")
// // window.close()

// // about.close()

// /**
//  * alert
//  * confirm
//  * prompt
//  */
// // var about;
// // function btnOPenPage(){
// // about=window.open("about.html","","width=100","height=100")
// // }

// // function btnClosePage() {
// //     about.close()
// // }

// // function btnMoveToPage(){
// // about.moveTo(150,150)
// // about.focus()
// // }
// // function btnMoveByPage(){
// // about.moveBy(-10,-10)
// // about.focus()

// // }
// // function btnSizeToPage(){
// // about.resizeTo(50,50)
// // about.focus()
// // }
// // function btnSizeByPage(){
// // about.resizeBy(10,10)
// // about.focus()
// // }

// // console.log(window.history);
// // console.log(window.history.length);
// // // console.log(window.history.back()); // <--
// // console.log(window.history.forward()); // -->

// /// navigator

// // console.log(window.navigator);
// window.navigator.geolocation.getCurrentPosition((position) => {
// //   console.log(position);
//   console.log(position.coords.latitude);
//   console.log(position.coords.longitude);
// });



// AJAX
// AJAX  ==> send request ==> URL , Method
// Send XmlHttpRequest 


// var tbody=document.getElementsByTagName("tbody")[0]
// console.log(tbody);

// function showUserData(user)
// {

// var tr=document.createElement("tr")
// tr.innerHTML=`
//     <td>${user.id}</td>
//     <td>${user.name}</td>
// `
// tbody.append(tr)


// }
// var xhr=new XMLHttpRequest();
//  var users;
// // initalize request ==>  send request
// xhr.open("get","https://jsonplaceholder.typicode.com/users")
// xhr.send()
// // check  status of request 
// xhr.onreadystatechange=function() {
//     if(xhr.readyState==4)
//     {
//         if(xhr.status==200)
//         {
//             // console.log(xhr.response);
//             // console.log(typeof(xhr.response)); // string 
//             // string to js object
//              users = JSON.parse(xhr.response);

//             // console.log(users);
//             // object to string
//             // var data =JSON.stringify(users);
//             // console.log(data);

//             if (users && users.length > 0) {
//                 // console.log(users);
//                 users.forEach((user) => {
//                     // console.log(user);
//                     showUserData(user);
//                 });
//             }
//         }
//     }
// }

//  console.log(users);







