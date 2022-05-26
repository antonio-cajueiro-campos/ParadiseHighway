<?php include 'layout_php/header.php'?>
<!-- ========== Conteúdo aqui ========== -->

<?php requiredAuth(); ?>

<div class="container object">
    <?php
        if (isset($_GET['plano'])) {
            $id_plano = $_GET['plano'];

            if ($id_plano != "") {
                if ($id_plano == 1) {
                    $preco_plano = '470.00';
                    $nm_plano_tk = "Plano menor preço";
                    $local_plano = "Círculo Dourado - Islândia";
                    $local_plano_short = "Círculo Dourado";
                  } else if ($id_plano == 2) {
                    $preco_plano = '833.00';
                    $nm_plano_tk = "Plano melhor avaliação";
                    $local_plano = "Círculo Dourado - Islândia";
                    $local_plano_short = "Círculo Dourado";
                  } else if ($id_plano == 3) {
                    $preco_plano = '934.00';
                    $nm_plano_tk = "Plano 4 pessoas";
                    $local_plano = "Círculo Dourado - Islândia";
                    $local_plano_short = "Círculo Dourado";
                  } else if ($id_plano == 4) {
                    $preco_plano = '416.00';
                    $nm_plano_tk = "Plano melhor avaliação";
                    $local_plano = "Jalapão - Tocantins";
                    $local_plano_short = "Jalapão";
                  } else if ($id_plano == 5) {
                    $preco_plano = '360.00';
                    $nm_plano_tk = "Plano hotel referência";
                    $local_plano = "Jalapão - Tocantins";
                    $local_plano_short = "Jalapão";
                  } else if ($id_plano == 6) {
                    $preco_plano = '152.00';
                    $nm_plano_tk = "Plano melhor preço";
                    $local_plano = "Jalapão - Tocantins";
                    $local_plano_short = "Jalapão";
                  } else if ($id_plano == 7) {
                    $preco_plano = '670.00';
                    $nm_plano_tk = "Plano para dois economico";
                    $local_plano = "Pacific Coast Highway - Califórnia";
                    $local_plano_short = "Pacific Coast Highway";
                  } else if ($id_plano == 8) {
                    $preco_plano = '871.00';
                    $nm_plano_tk = "Plano para família";
                    $local_plano = "Pacific Coast Highway - Califórnia";
                    $local_plano_short = "Pacific Coast Highway";
                  } else if ($id_plano == 9) {
                    $preco_plano = '1174.00';
                    $nm_plano_tk = "Plano viagem com os amigos";
                    $local_plano = "Pacific Coast Highway - Califórnia";
                    $local_plano_short = "Pacific Coast Highway";
                    
                  }
                $nm_plano = $nm_plano_tk." - ".$local_plano_short;
                include_once "plan_pages/plano_".$id_plano.".php";
            } else {
                echo "<META http-equiv=refresh content=0;URL=index.php>";
            }

        } else {
            echo "<META http-equiv=refresh content=0;URL=index.php>";
        }

    ?>
    
</div>

<!-- ========== Conteúdo termina aqui ========== -->
<?php include 'layout_php/footer.php'?>