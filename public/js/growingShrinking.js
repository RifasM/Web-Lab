var x = document.getElementById("text");
var f = 5;
var a = setInterval(increment, 100);

function increment() {
    x.innerHTML = "Text Growing"
    x.setAttribute("style", "font-size:" + f + "pt; color:red");
    f += 5;
    if (f === 50) {
        clearInterval(a);
        var b = setInterval(decrement, 100);
    }
}

function decrement() {
    f -= 5;
    x.innerHTML = "Text Shrinking"
    x.setAttribute("style", "font-size:" + f + "pt; color:blue");
    if (f === 5) {
        var b = setInterval(increment, 100);
        clearInterval(b);
    }
}
