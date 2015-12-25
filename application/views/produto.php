<div class="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <?php echo heading($produtos[0]->titulo,3); ?>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php echo img("assets/img/produto-sem-foto.png"); ?>
        </div>
        <div class="col-md-8">
            <?php 
                foreach ($produtos as $produto) {
                    echo "<p>" .$produto->descricao . "</p>" .
                    heading($produto->codigo,6) .
                    heading(reais($produto->preco) , 5);
                }
            ?>
        </div>
    </div>
</div>
