<?php
@session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>TO DO LIST</title>

</head>
<style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(45deg, blue, red);
        background-image: url(img/a-minimalist-abstract-digital-background_P-PrtfdSVaugT3n9km7HkQ_NVZm_Md9TIOOEfz6Vt42ow_sd.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Verdana, Geneva, Tahoma, sans-serif;


    }

    div {
        width: 350px;
        height: 350px;
        background: transparent;
        backdrop-filter: blur(70px);
        border-radius: 15px;
    }

    #tarefas {
        padding: 5px;
        margin: 5px;
        margin-top: 10px;
        margin-left: 10px;
        border-radius: 10px;

    }

    #lista {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        margin-top: 10px;
        margin-left: 10px;
        color: white;

    }

    #submit {
        border-radius: 10px;
        background-color: white;
        font-size: 14px;

    }
</style>

<body>

    <div container>

    
                
                    <?php

                    include_once "tarefa/tarefa.php";

                    ?>


    </div>



</body>

</html>