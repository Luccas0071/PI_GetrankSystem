<?php 
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Cadastro de Produtos</h3>

    <form>
        <div class="input-field col s12">
            <input type="text" name="nome"  id="nome">
            <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="valor"  id="valor">
            <label for="nome">valor</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="kg"  id="kg">
            <label for="nome">Kg</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="quatidade"  id="quatidade">
            <label for="nome">Quatidade</label>
        </div>

        <button type="submit" class="btn">Cadastrar</button>
        <button type="submit" class="btn green" href="cadastro_clientes.php">Lista de Clientes</button>
    </form>

  </div>
</div>

<?php
include_once 'includes/footer.php';
?>