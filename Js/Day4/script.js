/**
 * EVENT ==> Asynchronus ==> fire 
 * 
 * onEvent ==> onEventName=function
 * 
 * onclick 
 * onblur
 * onmouseEnter
 * onmouseLeave
 * onDoubleClick
 * 
 * 
 * ==> element in html ==> function
 * ==> select element 
 * ===>  function
 * 
 * ====================> addEventListener
 */


// function print()
// {
// console.log("click");

// }



// let btn=document.getElementsByTagName('button')[0];
// // btn.onclick=function printt()
// // {

// //     container.innerText='after event'
    
// // }
// btn.onclick=()=>
// {

//     container.innerText='after event'
    
// }
// btn.onclick=()=>
// {

//     container.innerText='TESSSSSSSSSSSST'
    
// }

/**
 * callback function ==> function is called by aanother function
 */


// function print()
// {
//     console.log("hello");
    
// }

// print()

// function trackName(fun,track)
// {
//     fun()  // callback funtcion
//     console.log(track);
    
// }

// // trackName(print,"php")

// // trackName(function(){
// //     console.log("hello");
    
// // },"php")
// trackName(()=>{
//     console.log("hello");
    
// },"php")
function changeStyle()
{
    container.style.color='blue'

}

let btn=document.getElementsByTagName('button')[0];
btn.addEventListener('click',function(e)
{
    console.log(e.target);
    
    // console.log("hello");
    
})

btn.addEventListener('mouseenter',()=>{
    // console.log("php");
    container.style.cssText=`color:red;
    
    margin-bottom:10px;
    text-align:center
    `
    
})
const mouseLeaveHandler = () => {
    container.style.cssText = `color:Blue;
    margin-bottom:10px;
    text-align:center
    `;
};

btn.addEventListener('mouseleave', mouseLeaveHandler);

btn.removeEventListener('mouseleave', mouseLeaveHandler);

