
<?php
require_once "index.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

$app = new UpfTpl($orauser, $orapassw, $oradb, "web/jovemEmpreendedor/", "menu.tpl.html", CODAPLICACAO, TRUE);
$db = mysql_select_db('nome_do_banco_de_dados');
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
      $username_err = "Por favor coloque um nome de usuário.";
  } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
      $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
  } else{
    $sql = "SELECT email FROM jetemporaria WHERE username = :username";
?>
