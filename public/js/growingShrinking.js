function start(str) {
    var x = document.getElementById("text");
    var f = 5;
    var a = setInterval(increment, 250);

    function increment() {
        x.innerHTML = str + " Growing"
        x.setAttribute("style", "font-size:" + f + "pt; color:red");
        f += 5;
        if (f >= 50) {
            clearInterval(a);
            b = setInterval(decrement, 250);
            //clearInterval(c);
        }
    }

    function decrement() {
        f -= 5;
        x.innerHTML = str + " Shrinking"
        x.setAttribute("style", "font-size:" + f + "pt; color:blue");
        if (f === 5) {
            clearInterval(b)
            //b = setInterval(increment, 500);
            //clearInterval(b);
        }
    }
}
