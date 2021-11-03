<?php

$captcha = isset($_POST['g-recaptcha-response'] )
                ? $_POST['get-recaptcha-response']
                :  null;
if(!is_null($captcha)){
    //não é NULO
    $res = file_get_contents("https://google.com/recaptcha/api/siteverfy?secret=LcvjxAdAAAAAC12R3O4WC5lnPYBCd26fIs13CTl&"
    . "response=" . $captcha . "&remoteip=". $_SERVER['REMOTE_ADDR']
);//RENOTA JSON == INFORMA CERTO E ERRADO
    $res = json_decode($res);
    if($res->sucess === true){
      echo"captcha valido";
    }
else{
    echo"captcha invalido";
}

}


         $secret = "6LcvjxAdAAAAAC12R3O4WC5lnPYBCd26fIs13CTl";
         $response = null;
         $reCaptcha = new reCaptcha($secret);

         if(isset($_POST['g-recaptcha-response'])){
           $response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADOR'], $_POST['g-recaptcha-response']);
         }

        if($response != null && $response ->success){
          echo"Prosseguir";
        }
        ?>