<?php
    session_start();
    print_r($_POST);

    if(isset($_POST['btnLogar'])){
        $usuario = 'admin';
        $senhabanco = crypt(md5('123456'),'etec');;

        $senhacripty = crypt(md5($_POST['pass']),'etec');

        if($usuario == $_POST['username'] && $senhacripty === $senhabanco){
            $_SESSION['usuario'] = $_POST['username']; 
            header('Location: principal.php');
        }else{
            header('Location: index.php?erro=1');
        }
    }
?>