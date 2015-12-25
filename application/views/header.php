<div class="container">
    <div class="masthead">
        <div id="cadastro-e-login">
            <a href="<?php base_url(); ?>cadastro">Cadastro</a>
            <a href="<?php base_url(); ?>login">Login</a>
        </div>
        <h2 class="text-muted"><strong>The Grocery Store Brazil</strong></h2>
        <ul class="nav nav-tabs">
            <li class="active"><a href="<?php base_url() ?>">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url() ?>produtos">Produtos<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    foreach($categorias as $categoria){ 
                        echo "<li>".anchor(base_url("categoria/".$categoria->id ."/". limpar($categoria->titulo)),$categoria->titulo)."</li>"; 
                    }
                    ?>
                </ul>
            </li>
            <li><a href="<?php echo base_url() ?>fale-conosco">Fale conosco</a></li>
            <li class="pull-right">
                <form method="post" action="home/buscar" name="form_busca" class="navbar-form" role="search">      
                    <input type="text" name="txt_busca" placeholder="Buscar" class="search-query">
                    <input type="submit" name="btn_busca" value="Buscar">
                </form>
            </li>
        </ul>
    </div>