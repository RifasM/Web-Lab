function vowel(str) {
    str = str.toUpperCase();

    for (var i = 0; i < str.length; i++) {
        var ch = str.charAt(i);
        if (ch === "A" || ch === "E" || ch === "I" || ch === "O" || ch === "U")
            break;
    }

    if (i < str.length)
        document.write("The left most vowel is at position: " + (i + 1));
    else
        document.write("Vowel not found");
}
