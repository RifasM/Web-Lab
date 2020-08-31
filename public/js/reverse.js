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
