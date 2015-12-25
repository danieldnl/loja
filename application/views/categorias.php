<div id="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <h3>Seja bem vindo a nossa loja.</h3>
        <p>A melhor loja de comida, especiarias e temperos. Compre online e receba em casa.</p>
        <a class="btn btn-success" href="#">Cadastre-se</a>
    </div>
</div>
<div class="row">
    <?php
      $contador = 0;
      foreach($categorias as $categoria){
          $contador++;
          echo "<div class='col-md-4 caixacategoria'>" .
          heading($categoria->titulo,3);		  
          echo "<p>". word_limiter($categoria->descricao,40) ."</p>" .
          anchor(base_url("categoria/".$categoria->id ."/". limpar($categoria->titulo)),"Ver produtos", array('class'=>'btn'));
          echo "</div>";       
          if($contador%3 == 0){ // Para exibir em blocos de 3 em 3 categorias
              echo "</div><div class='row'>";
          }
      }
      ?>
</div>