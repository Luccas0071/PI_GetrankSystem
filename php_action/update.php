<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-atualizar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $numeroNascional = mysqli_escape_string($connect, $_POST['numeroNascional']);
    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "UPDATE clientes SET nome = '$nome', endereco = '$endereco', telefone = '$telefone', numeroNascional = '$numeroNascional' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../clientes.php?sucesso');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../clientes.php?erro');
    endif;
endif;

?>