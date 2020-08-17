function count(n) {
    var table_body = "";

    for (var i = 1; i <= n; i++) {
        table_body += "<tr>" +
            "<td>" + i + "</td>" +
            "<td>" + i * i + "</td>" +
            "<td>" + i * i * i + "</td>" +
            "</tr>";
    }
    document.getElementById("square-cube").value = n;
    document.getElementById("counter-content").innerHTML = table_body;
}

var c = parseInt(window.prompt("Enter range: ", "10"));
if (c < 0) {
    alert("Number Cannot be negative");
} else {
    count(c);
}


// take input from the user
/*var p = prompt("Enter the coefficient 1: ", "2");
var q = prompt("Enter the coefficient 2: ", "1");
var r = prompt("Enter the coefficient 3: ", "3");

if(p < 0){
    alert("Coefficient a cannot be 0");
}
else{
    calc_quad(p, q, r);
}
*/

function calc_quad(a, b, c) {
    var root1, root2;
    var d = b * b - 4 * a * c;

    // condition for real and different roots
    if (d > 0) {
        root1 = (-b + Math.sqrt(d)) / (2 * a);
        root2 = (-b - Math.sqrt(d)) / (2 * a);

        alert(`The roots of quadratic equation are ${root1} and ${root2}`);
        document.getElementById("extra-answer").innerHTML =
            'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are ' + root1 + ' and ' + root2;
    }

    // condition for real and equal roots
    else if (d == 0) {
        root1 = root2 = -b / (2 * a);

        alert(`The roots of quadratic equation are ${root1} and ${root2}`);
        document.getElementById("extra-answer").innerHTML =
            'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are ' + root1 + ' and ' + root2;
    }

    // if roots are not real
    else {
        var realPart = (-b / (2 * a)).toFixed(2);
        var imagPart = (Math.sqrt(-d) / (2 * a)).toFixed(2);

        alert(
            `The roots of quadratic equation are ${realPart} + ${imagPart}i and ${realPart} - ${imagPart}i`
        );
        document.getElementById("extra-answer").innerHTML =
            'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are ' + realPart + ' + ' + imagPart + 'i and ' + realPart + ' - ' + imagPart + 'i';
    }
}

function multiply_tables(n) {
    target = document.getElementById("mult-tables");
    for (var i = 1; i <= n; i++) {
        var data = "<div class='col-md-3' style='margin-left: 1%; margin-left: 1%;'><table class=\"table table-hover m-b-md\"><thead class=\"thead-dark\"><th scope=\"col\">Table of " + i + "</th></thead><tbody>";
        for (var j = 1; j <= 10; j++) {
            data += "<tr><td>" + i + "&times;" + j + " = " + i * j + "</td></tr>";
        }
        data += "</tbody></table></div>"

        target.innerHTML += data;
    }
}
