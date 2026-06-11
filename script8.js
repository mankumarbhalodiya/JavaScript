// closer examples
//1
// function x(){
//     var i = 1;
//     setTimeout(function(){
//         console.log(i);
//     }, 3000);
//     console.log("Man Bhalodiay")
// }
// x();

// //2  5 times 1 
// function x(){
//     for(var i = 1;i <=5; i++){
//         setTimeout(function (){
//         console.log(i);
//         }, i * 1000);
//     }
//     console.log("Man Bhalodiya");
// }
// x();


// //3 1 to 5 
// function x(){
//     for(let i = 1;i <=5; i++){
//         setTimeout(function (){
//         console.log(i);
//         }, i * 1000);
//     }
//     console.log("Man Bhalodiya");
// }
// x();


// store in seprate memory and new copy of i 
function x(){
    for(let i = 1;i <=5; i++){
        function close(x){
        setTimeout(function (){
            console.log(i);
        }, i * 1000);
        }
        close(i);
    }
    console.log("Man Bhalodiya");
}
x();