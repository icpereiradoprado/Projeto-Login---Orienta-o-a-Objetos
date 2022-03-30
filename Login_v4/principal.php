<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <style>
        body{
            background-image: linear-gradient(to right top, #34113F,#D4F2D2);
        }
        p{
            font-size: 40px;
            color: black;
            font-family: fantasy;
            /* text-align: center; */
        }
        span{
            text-align: center;
        }
        .container{
            height: 780px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            justify-content: center;    
        }
        .texto{
            
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="texto">
            <p>Parabéns você sabe a sua senha... 😃👍</p>
        </div>
    </div>

    <?php
        $hora = date('H');
        if($hora > 19){
            $saudacao = "Boa noite";

        }elseif($hora > 12){
            $saudacao = 'Boa tarde';
        }else{
            $saudacao = 'Bom dia';
        }
        echo $saudacao." ".$_SESSION['usuario'];
    ?>
</body>
</html>