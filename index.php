<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$symbian = strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'], "Windows Phone");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) { //Verifica se é mobile ou desktop
  $dispositivo = "mobile";
} else {
  $dispositivo = "computador";
}

if ($dispositivo == "mobile") { //Se for dispositivo movel
  require_once 'm.index.html';
}
if ($dispositivo == "computador") { //Se for computador

  require_once 'index.html';
}
