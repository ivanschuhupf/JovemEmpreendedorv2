
function soma(number1, number2) {
    if ( total == number1 + number2) {

        document.getElementById('aviso').innerHTML = "reCAPTCHA válido";

        document.getElementById("enviar").removeAttribute("disabled");

       

}
else{

        document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";

        document.getElementById("enviar").setAttribute("disabled", "");

}
}