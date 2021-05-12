<?php
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Pedidos</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Cliente:</th>
          <th>Valor:</th>
          <th>Data:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Texte Texte Texte</td>
          <td>R$: 200,00</td>
          <td>22/12/2021</td>
          <td><a href="#" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="cadastro_pedidos.php" class="btn">Adicionar Pedido</a>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>