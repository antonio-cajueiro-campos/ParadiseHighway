<?php

    include_once 'configuracao.php';
    session_start();
    include_once 'functions.php';


    if (isset($_SESSION['sessao'])) {
        $id_usuario = $_SESSION['sessao'];

        $sql = ("SELECT cd_usuarios, nm_pessoa, ds_email FROM usuarios WHERE cd_usuarios = '$id_usuario'");
        $query = mysqli_query($conectar, $sql);
        $row = mysqli_fetch_array($query);

        $id_usuario = $row['cd_usuarios'];
        $nome_usuario = $row['nm_pessoa'];
        $email_usuario = $row['ds_email'];
    }
    



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Desenvolvido por Antonio Caio, Felipe e Tiago -->
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="e-mail" content="viagens@gmail.com">
    <meta name="keywords" content="viagens">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="Viaje conosco.">
    <meta name="Abstract" content="viagens para diversos lugares">
    <meta name="author" content="Antonio Caio, Felipe e Tiago">
    <meta name="copyright" content="Antonio Caio, Felipe e Tiago">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="colocar-o-codigo-de-verificação-google-aqui">
    <?php echo "<title>$nome_pagina - $nome_site</title>"; ?>
    <link rel="canonical" href="http://viagens.com/">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/config-root.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/caio.css">
    <link rel="stylesheet" href="css/f.css">
    <link rel="stylesheet" href="css/tiago.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/antonio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="346167052512-9t4jm562bs6kdp8inpqlcsm930bep5gs.apps.googleusercontent.com"> -->
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/functions2.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark navbarone">
            <a href="index.php" class="navbar-brand"><img src="images/logo1.png" alt="Logo Tipo" title="Paradise Highway" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-site">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-site">
                <ul class="navbar-nav ml-auto">
                    <?php 
                        if (isset($_SESSION['sessao'])) {
                    ?>
                        <span class="bv-txt text-light">Bem-vindo, <?php echo $nome_usuario; ?></span>
                        <li class="nav-item dropdown">
                            <a href="#" class="btn nav-link dropdown-toggle text-light btn-outline-light" data-toggle="dropdown">Minha conta</a>
                            <div class="dropdown-menu">
                                <a href="meus_tickets.php" class="dropdown-item text-dark">Meus tickets</a>
                                <a href="perfil.php" class="dropdown-item text-dark">Configurações</a>
                                <a href="sair.php" class="dropdown-item text-dark">Sair</a>
                            </div>
                        </li>

                    <?php } else { ?>

                        <a href="login.php" class="btn nav-link text-light btn-outline-light">Login / Cadastrar</a>

                    <?php } ?>
                    <li class="nav-item dropdown">
                        <a href="#" class="btn nav-link dropdown-toggle text-light btn-outline-light" data-toggle="dropdown">Descubra</a>
                        <div class="dropdown-menu">
                            <a href="pacific_coast_highway.php" class="dropdown-item text-dark">Pacific Coast Highway</a>
                            <a href="jalapao.php" class="dropdown-item text-dark">Jalapão</a>
                            <a href="circulo_dourado.php" class="dropdown-item text-dark">Círculo Dourado</a>
                        </div>
                    </li>
                    <a href="#" class="btn nav-link text-light btn-outline-light">Saiba mais</a>
                </ul>
                
            </div>
        </nav>
    </div>