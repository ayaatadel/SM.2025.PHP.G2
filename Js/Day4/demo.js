
// select elemnt 
/**
 * document ==> object => html 
 * id ==> document.getElementById ==> element
 * class =>getElementsByClassName ==> html collection (array:K-V)
 * tag ==>tagName=>getElementsByTagName ==>html collection (array:K-V)
 * name ==>input=>getElementsByName==>Node list (array:K-V)
 * 
 * ======================
 * id ==> #id || class ==> .className || tag ==> p
 * QuerySelector  ===>  firset ement
 * QuerySelectorAll ===>  all elemnts ==> node list
 */
// // let header=document.getElementById("header")
// let pg=document.getElementsByClassName('text')
// let sp_text=document.getElementsByTagName('span')
// let userName=document.getElementsByName('userName')
// // console.log(header);
// // console.log(pg[0]);
// // console.log(pg[1]);
// // console.log(pg[2]);
// // console.log(sp_text[0]);
// // console.log(userName);


// // let testSpan=document.querySelector('span')
// // let testSpan=document.querySelector('#sp')
// let testSpan=document.querySelector('.test2')
// let testSpanAll=document.querySelectorAll('span')
// console.log(testSpan);
// console.log(testSpanAll);
// // ================== change coneten of element

// /**
//  * selce element 
//  * html ==> ele.innerHTML
//  * text    ==>ele.innerText=
//  */


// let header=document.getElementById("header")
// header.innerText='Summer training php g2'

// let container=document.getElementById("container")
// // container.innerText="Hello"


// // container.innerHTML=`
// // <img src='1.png' alt='img1'>
// // <p> Buy </p>
// // `
// /////////////////// Create Element
// /**
//  * ele=document.createElement('tagName')
//  * ele.append() ==> more than one elemnt
//  * ele.appendChild()  ==> one elemnt
//  */
// let buttonBuy =document.createElement('button')
// buttonBuy.innerText="BUY"
// // pg[1].after(buttonBuy)
// let image=document.createElement("img")

// // pg[1].before(buttonBuy)
// container.append(image,buttonBuy)

// //================== change attributes of elemnts 
// /**
//  *   set attribute ==> add ,  update, delete 
//  * 
//  * ----------> attribute not esxist ==> add

// * getAttribute('attr_name')==> get attribute value
//  */


// // add attribute=>attribute not esxist ==> 
// /**
//  * ele.attributename= value
//  * ele.setAttribute ('att',valuw)
//  */
// image.alt="img1"  // add
// image.setAttribute('src','img2')


// /**
//  * update  ==> attribute aleardy exist 
// * ele.attributename= value
//  * ele.setAttribute ('att','valu')
//  */

// image.src='imgs/2.png'
// image.setAttribute('alt','tailor')
// image.setAttribute('width','100px')


// image.title="tailor"

// /**
//  * remove attribute
//  * ele.removeAttribute('title')
//  */

// // image.removeAttribute('title')

// /**
//  * toogle attribute  ==> on || off
//  * attribute => exist => remove
//  * attribute => not exist => add
//  * ele.toggleAttribute('title')
//  */

// image.toggleAttribute('title')

// console.log(document);


// HTML Collection

// console.log(document.images); // return all imgaes=> html collection
// console.log(document.title);
// console.log(document.links);
// console.log(document.forms);


// // id 
// sp.innerText='chane span text'



//// ============> change in  style of element

/**
 * select elemnt 
 * ele.style='prop:value';
 * ele.style.pro=='value';
 * ele.style.cssText==``;
 * 
 */

let header=document.getElementById('header')
// header.style="color:red"
// header.style.backgroundColor='gray'
// header.style.cssText=`
// color:red;
// text-align:center;
// background-color:rgb(220 220 232);
// `
/// class 
/**
 * add ==> ele.classList.add('cls_Name')
 * add ==> ele.classList.add('cls_Name','cls_name')
 * remove==>
 */
let container=document.getElementById("container");
container.classList.add('text-style','test')

header.classList.add('text-style','test')
container.classList.remove('text-style')
header.classList.remove('text-style')
container.classList.toggle('text-style')
header.classList.toggle('text-style')



console.log(header.getAttribute('id'));
console.log(header.id);

////////////////////

/**
 * create section
 * img==> src , alt 
 * p==> content 
 * button => add to cart
 */

let contain=document.createElement('section')
let image=document.createElement('img')
let pg=document.createElement('p')
let btn=document.createElement('button')


contain.classList.add('text-style')

image.setAttribute('src','imgs/2.png')
image.style.cssText=`
width:100px;
height:100px;
border-radius:5px
`
image.setAttribute('alt','tailor')
image.title='tailor'

/////////////////////////////
pg.innerText='taior buy any thing that you want'

////////////////
btn.innerText='Add To Cart'
btn.style.cssText=`

padding:10px;
background-color:gray;
color:brown;
border:none;
border-radius:5px;
margin-bottom:10px
`

contain.append(image,pg,btn)
document.body.appendChild(contain)