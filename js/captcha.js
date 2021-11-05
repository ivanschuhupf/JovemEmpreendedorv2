var number1;
var number2;
var total;

setNumbersRandom = () => {
    document.getElementById('inputCaptcha').value = "";
    number1 = parseInt(Math.random()*10+1);
    number2 = parseInt(Math.random()*10+1);
    total = number1 + number2;

    document.getElementsByName('inputCaptcha')[0].placeholder=` ${number1} + ${number2} = ?`;
}

document.getElementById("btnSubmit").addEventListener("click", function() {
    var valorDoInput = parseInt(document.getElementById('inputCaptcha').value);
    console.log(valorDoInput)
    console.log(total)
    if (valorDoInput == total) {
       alert("OK")
    } else {
     alert("soma incorreta")
        setNumbersRandom();
    }
});

document.onload = setNumbersRandom();
