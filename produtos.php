<?php 
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Produtos</h3>
    <table class="striped">
      <thead>
          <tr>
            <th>Nome:</th>
            <th>Valor:</th>
            <th>Kg:</th>
            <th>Quantidade</th>
          </tr>
      </thead>
      <tbody>
          <tr>
            <td>Texte</td>
            <td>R$ 10,99</td>
            <td>25,00</td>
            <td>5</td>
            <td><a href="#" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
          </tr>
      </tbody>
    </table>
    <br>
    <a href="cadastro_produtos.php" class="btn">Adicionar Produto</a>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>