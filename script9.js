// function statement also know as the function declaration 
function a(){
    console.log("a is called");
}
a();


//function expression 
var b = function(){
    console.log("b is called");
}
b();


// anonymous function  it is used as a value
// function (){

// }

// Name function expression  - this is give me error because the abc is not defined
// var b = function abc(){
//     console.log("b is called");
// }
// abc();

//frist class functions/citizens - ablity to be used like values/passing function inside the function 
var b = function(param1){
    return function (){

    }
}
console.log(b());

