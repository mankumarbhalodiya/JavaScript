//Map function 
const arr = [5, 1, 3, 2, 6];

//Double = [10, 2, 6, 4, 12]
function Double(x){
    return x*2;
}
const output = arr.map(Double);
console.log(output);


//triple = [15, 3, 9, 6, 18]
function triple(x){
    return x*3;
}
const output1 = arr.map(triple);
console.log(output1);


//binary = ["101", "1", "11", "10", "110"]
const output2 = arr.map(function binary(x){
    return x.toString(2);
})
console.log(output2);