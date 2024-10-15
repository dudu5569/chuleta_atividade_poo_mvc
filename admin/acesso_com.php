<?php
session_name('chulettaaa');
if(!isset($_SESSION)){
session_start();
}
    
if (!isset($_SESSION['login_usuario'])){//verificar se o usuario esta logado na sessai
//se nao existir sessao, redirecionar para a pagina de login
header("location: login.php");
exit;
}
        
$nome_da_sessao = session_name();
if (!isset($_SESSION['nome_da_sessao'])
or ($_SESSION['nome_da_sessao'] !=$nome_da_sessao)){
session_destroy();
header("location: login.php");
}


?>