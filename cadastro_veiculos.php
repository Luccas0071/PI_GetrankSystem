<?php 
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Cadastro de Veiculos</h3>

    <form>
        <div class="input-field col s12">
            <input type="text" name="modelo"  id="modelo">
            <label for="nome">Modelo</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="placa"  id="placa">
            <label for="nome">Placa</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="cat_veiculo"  id="cat_veiculo">
            <label for="nome">Categoria de Veiculo</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="status"  id="status">
            <label for="nome">Statos</label>
        </div>

        <button type="submit" class="btn">Cadastrar</button>
        <button type="submit" class="btn green">Lista de Veiculos</button>
    </form>

  </div>
</div>

<?php
include_once 'includes/footer.php';
?>