function vowel(str) {
    str = str.toUpperCase();

    for (var i = 0; i < str.length; i++) {
        var ch = str.charAt(i);
        if (ch === "A" || ch === "E" || ch === "I" || ch === "O" || ch === "U")
            break;
    }

    if (i < str.length)
        document.getElementById("answer").innerHTML = "The left most vowel is at position: " + (i + 1);
    else
        document.getElementById("answer").innerHTML = "Vowel not found";
}

function reverseNum(num) {
    var rem, rev = 0;
    while (num !== 0) {
        rem = num % 10;
        rev = rev * 10 + rem;
        num = Math.floor(num / 10);
    }
    document.getElementById("reverse-answer").innerHTML = "The reverse is: " + rev;
}

function fibonacci(num) {
    let ans_div = document.getElementById("fib-answer");
    ans_div.innerHTML = "";

    let num1 = 0
    let num2 = 1
    let sum = 0
    if (num === 0)
        ans_div.innerHTML = "<p class='text text-danger'>Enter a value greater than 0</p>";
    else {
        ans_div.innerHTML = "Fibonacci Series upto " + num + " terms: ";
        if (num === 1)
            ans_div.innerHTML += num1;
        else if (num === 2)
            ans_div.innerHTML += num1 + ", " + num2;
        else {
            ans_div.innerHTML += num1 + ", " + num2;
            for (let i = 2; i < parseInt(num); i++) {
                sum = num1 + num2
                num1 = num2
                num2 = sum
                ans_div.innerHTML += ", " + sum;
            }
        }
    }
}
