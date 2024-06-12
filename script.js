function calculateProduct(num1, num2, num3) {
    return num1 * num2 * num3;
}

function showProduct() {
    var num1 = parseFloat(document.getElementById('num1').value);
    var num2 = parseFloat(document.getElementById('num2').value);
    var num3 = parseFloat(document.getElementById('num3').value);

    var product = calculateProduct(num1, num2, num3);

    document.getElementById('result').innerHTML = "The product is: " + product;
}