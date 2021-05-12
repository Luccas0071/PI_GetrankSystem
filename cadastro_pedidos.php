<?php
include_once 'includes/header.php';
?>

<div class="campo-pedidos">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Adicionar Produtos</h3>
        <div class="pesquisa-itens">
            <div class="input-field col s12">
                <input type="text" name="produto"  id="produto">
                <label for="produto">produto</label>
            </div>
        </div>

        <div class="campo-cliente">
            <h6>Cliente: <span>Lucas Vinicius de Oliveira</span></h6>
        </div>

        <div class="campo-dois">
            <div class="campo-auto">
                <h5>Sub-Total: <span>R$: 00.00</span></h5>
                <h5>Forma de Pagamento: <span>Dinheiro/Cartão</span></h5>
            </div>

            <div class="campo-baixo">
                <h4>Total: <span>00.00</span></h4>
            </div>
        </div>
    </div>   
</div>
<?php
include_once 'includes/footer.php';
?>