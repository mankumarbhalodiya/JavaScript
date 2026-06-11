//block scope and shadowing 
//shadowing 
var b=1000;
{
    var a=100;
    let b=200;
    const c=300;
    console.log(a);
    console.log(b);
    console.log(c);
}
console.log(a);
console.log(b);//becuase the this b is not in the global and it has a seprate memory

// const a = 20;
// {
//     const a = 100;{
//         const a = 200;
//         console.log(a);
//     }
// }