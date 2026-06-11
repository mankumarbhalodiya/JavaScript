//the scope chain
function a(){
    // var b=10;
    c();
    function c(){
        console.log(b);
    }
}
var b=10;
// console.log(b);
a();