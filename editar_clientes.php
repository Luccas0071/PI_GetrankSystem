<?php 
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Cliente</h3>

    <form action="php_action/update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

        <div class="input-field col s12">
            <input type="text" name="nome"  id="nome" value="<?php echo $dados['nome']; ?>">
            <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="endereco"  id="endereco" value="<?php echo $dados['endereco']; ?>"> 
            <label for="endereco">Endereço</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="telefone"  id="telefone" value="<?php echo $dados['telefone']; ?>">
            <label for="telefone">Telefone</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="numeroNascional"  id="numeroNascional" value="<?php echo $dados['numeroNascional']; ?>">
            <label for="numeroNascional">CPF / CNPJ</label>
        </div>

        <button type="submit" name="btn-atualizar" class="btn">Atualizar</button>
        <a href="clientes.php" class="btn green">Lista de Clientes</a>
    </form>

  </div>
</div>

<?php
include_once 'includes/footer.php';
?>