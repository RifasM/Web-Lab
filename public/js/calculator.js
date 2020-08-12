function display(x) {
    document.querySelector('.calculator-screen').value += x;
}

function compute() {
    var x = document.querySelector('.calculator-screen').value;
    document.querySelector('.calculator-screen').value = eval(x);
}
