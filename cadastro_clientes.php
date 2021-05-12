<?php 
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Cadastro de Cliente</h3>

    <form action="php_action/create.php" method="POST">
        <div class="input-field col s12">
            <input type="text" name="nome"  id="nome">
            <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="endereco"  id="endereco">
            <label for="endereco">Endereço</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="telefone"  id="telefone">
            <label for="telefone">Telefone</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="numeroNascional"  id="numeroNascional">
            <label for="numeroNascional">CPF / CNPJ</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        <a href="clientes.php" class="btn green">Lista de Clientes</a>
    </form>

  </div>
</div>

<?php
include_once 'includes/footer.php';
?>