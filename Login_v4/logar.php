<?php
    session_start();
    require_once 'Usuario.php';

    if(isset($_POST['btnLogar'])){
        $usuario = new Usuario();
        $verifica = $usuario->verificaLogin($_POST['username'],$_POST['pass']);

        if($verifica == true){
            $_SESSION['usuario'] = $_POST['username']; 
            header('Location: principal.php');
        }else{
            header('Location: index.php?erro=1');
        }
    }
?>