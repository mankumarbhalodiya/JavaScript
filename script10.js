// Asynchronous Js and event loop
console.log("Start");
setTimeout(function cbT(){
    console.log("CB SetTimeout");
}, 5000);
fetch("www.youtube.com")
.then(function cbF(){
    console.log("CB youtube");
});
console.log("End");