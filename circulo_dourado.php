<?php include 'layout_php/header.php'?>
<!-- ========== Conteúdo aqui ========== -->

<div class="container object">
    <h1 class="lugh1 tt"><?php echo $nome_pagina; ?></h1>
    
    <div class="row">
        <input type="checkbox" id="img1" class="input-img i1" name="itemCheck">
        <label class="col imgc img1" for="img1" onclick="desativarscroll()">
            <img class="centimagem" src="images/Dourado1.jpg">
        </label>
        <input type="checkbox" id="img2" class="input-img i2" name="itemCheck2">
        <label class="col imgc img2" for="img2" onclick="desativarscroll()">
            <img class="centimagem" src="images/Dourado2.jpg">
        </label>
        <input type="checkbox" id="img3" class="input-img i3" name="itemCheck3">
        <label class="col imgc img3" for="img3" onclick="desativarscroll()">
            <img class="centimagem" src="images/Dourado3.jpg">
        </label>
        <div class="overlay2"></div>
    </div>
    
    <hr class="lughr">
    <div class="row">
        <div class="col-md-6">
            <div class="row row-title sobre-row text-center">
                <div class="col-12">
                    <h4 class="lugh1">Sobre o local</h4>
                </div>
            </div>
            <div class="row">
                <p class="lugp">
                O Círculo Dourado é o roteiro turístico mais famoso da Islândia. Dentre cem visitantes do país, 99 percorrem o circuito que realmente cobre atrações consideradas imperdíveis,
                aquelas que você vai à Islândia justamente para conhecer. O Círculo Dourado inclui o Parque Nacional de Pingvellir
                (essa letra islandesa soa como “th” na palavra inglesa “think”), uma área geotérmica com gêisers, e a larga cachoeira de Gullfoss.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row row-title text-center">
                <div class="col-12">
                    <h4 class="lugh1">Assista sobre</h4>
                </div>
            </div>
            <div class="row yt-row">
                <iframe class="yt-video" height="300" src="https://www.youtube.com/embed/5ASTUR25XwE?start=175" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row text-center saib">
        <div class="col-6">
            <a href="https://www.ligadoemviagem.com.br/viagem-islandia-circulo-dourado/" class="semazul">
                <button class="buttonlug2">Saiba mais</button>
            </a>
        </div>
        <div class="col-6">
            <p class="lugp pp">Conheça um pouco mais sobre o <?php echo $nome_pagina; ?>.</p>
        </div>
    </div>
    <div class="row row-title text-center">
        <div class="col-12">
            <h4 class="lugh1">conheça nossos planos de viagem</h4>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <input checked type="radio" name="plano" id="plano1" class="plano" value="1">
                <label for="plano1" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano menor preço</h5>
                        <p>T10 Iceland</p>
                        <p>Localização: Hafnarfjörður</p>
                        <p class="card-text">R$ 470,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano2" class="plano" value="2">
                <label for="plano2" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano melhor avaliação</h5>
                        <p>Apt. Hotel Hjalteyri</p>
                        <p>Localização: Akureyri</p>
                        <p class="card-text">R$ 833,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano3" class="plano" value="3">
                <label for="plano3" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano 4 pessoas</h5>
                        <p>Live As Locals</p>
                        <p>Localização: Reiquiavique</p>
                        <p class="card-text">R$ 934,00</p>
                    </div>
                </label>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <?php requeridLogin(); ?>
            </div>
        </div>
    </form>
</div>

<!-- ========== Conteúdo termina aqui ========== -->
<?php include 'layout_php/footer.php'?>