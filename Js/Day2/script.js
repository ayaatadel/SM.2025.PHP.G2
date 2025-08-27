

// var obj={

//     key:value

// }
var person={  
    name:"mohammed",
    age:24,
    print: function(){
        // this 
      console.log(this.name);
      console.log(this.age);
    },
}

// console.log(person.name); // access value of key ==> dot notation
// console.log(person['age']);// access value of key ==> practices
// person.print()


person.address="cairo"// 
person['email']="m@gmail.com"// 
person.name="mahmoud"
/**
 * 
 * add ==> onj_name.key=value  || onj_name['key']=value
 * key exist ===> override on value
 * key not exist ==> add on object
 */
console.log(person);


var x={
    BD:"1-1-2020"
}

// x=person  // pointers ponit to same place  xxxxxxxxxxxxxxx
x={...person}  // ecah object point on its place  
person.test="test"
person.test22222222222="test2122222"
console.log(x);


