function count(n) {
    var table_body = "";

    for (var i = 0; i < n; i++) {
        table_body += "<tr>" +
            "<td>" + i + "</td>" +
            "<td>" + i * i + "</td>" +
            "<td>" + i * i * i + "</td>" +
            "</tr>";
    }
    document.getElementById("counter-content").innerHTML = table_body;
}

var c = parseInt(window.prompt("Enter range: ", "10"));
if (c < 0) {
    alert("Number Cannot be negative");
} else {
    count(c);
}

// program to solve quadratic equation
var root1, root2;

// take input from the user
var a = prompt("Enter the coefficient 1: ", "2");
var b = prompt("Enter the coefficient 2: ", "1");
var c = prompt("Enter the coefficient 3: ", "3");


var d = b * b - 4 * a * c;

// condition for real and different roots
if (d > 0) {
    root1 = (-b + Math.sqrt(d)) / (2 * a);
    root2 = (-b - Math.sqrt(d)) / (2 * a);

    // result
    alert(`The roots of quadratic equation are ${root1} and ${root2}`);
    document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup>' + b + 'x + ' + c + ' are ' + root1 + ' and ' + root2;
}

// condition for real and equal roots
else if (d == 0) {
    root1 = root2 = -b / (2 * a);

    // result
    alert(`The roots of quadratic equation are ${root1} and ${root2}`);
    document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup>' + b + 'x + ' + c + ' are ' + root1 + ' and ' + root2;
}

// if roots are not real
else {
    var realPart = (-b / (2 * a)).toFixed(2);
    var imagPart = (Math.sqrt(-d) / (2 * a)).toFixed(2);

    // result
    alert(
        `The roots of quadratic equation are ${realPart} + ${imagPart}i and ${realPart} - ${imagPart}i`
    );
    document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup>' + b + 'x + ' + c + ' are ' + realPart + ' + ' + imagPart + 'i and ' + realPart + ' - ' + imagPart + 'i';
}
