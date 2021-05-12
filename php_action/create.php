<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $numeroNascional = mysqli_escape_string($connect, $_POST['numeroNascional']);

    $sql = "INSERT INTO clientes (nome, endereco, telefone, numeroNascional) VALUES ('$nome', '$endereco', '$telefone', '$numeroNascional')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../clientes.php?sucesso');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../clientes.php?erro');
    endif;
endif;

?>