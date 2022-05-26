<?php include 'layout_php/header.php'?>
<!-- ========== Conteúdo aqui ========== -->

<div class="container object">
    <h1 class="lugh1 tt"><?php echo $nome_pagina; ?></h1>
    
    <div class="row">
        <input type="checkbox" id="img1" class="input-img i1" name="itemCheck">
        <label class="col imgc img1" for="img1" onclick="desativarscroll()">
            <img class="centimagem" src="images/Coast1.jpeg">
        </label>
        <input type="checkbox" id="img2" class="input-img i2" name="itemCheck2">
        <label class="col imgc img2" for="img2" onclick="desativarscroll()">
            <img class="centimagem" src="images/Coast2.jpg">
        </label>
        <input type="checkbox" id="img3" class="input-img i3" name="itemCheck3">
        <label class="col imgc img3" for="img3" onclick="desativarscroll()">
            <img class="centimagem" src="images/Coast3.jpg">
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
                A Pacific Coast Highway, na Califórnia, é considerada uma das estradas mais lindas do mundo. Ela liga San Francisco a Los Angeles e tem cerca de 730 km de extensão.
                Conhecida como Highway 1 ou simplesmente Pacific Coast Highway, a estrada mais famosa da Califórnia é uma das principais atrações turísticas do país.
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
                <iframe class="yt-video" height="300" src="https://www.youtube.com/embed/-nmO_rRl8ss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row text-center saib">
        <div class="col-6">
            <a href="https://www.visiteosusa.com.br/trip/viagem-de-carro-pela-pacific-coast-highway" class="semazul">
                <button class="buttonlug2">Saiba mais</button>
            </a>
        </div>
        <div class="col-6">
            <p class="lugp pp">Conheça um pouco mais sobre a <?php echo $nome_pagina; ?>.</p>
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
                <input checked type="radio" name="plano" id="plano1" class="plano" value="7">
                <label for="plano1" class="card mb-4 planol pc">
                    <div class="card-body">
                        <h5 class="card-title">Plano para dois económico: Ideal para viajem em dupla.</h5> 
                        <p>Rodeway Inn & Suites Pacific Coast Highway.</p>
                        <p>Localização: 1665 Pacific Coast Highway, Harbor City, CA 90710, Estados Unidos.</p>
                        <p class="card-text">R$ 670,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano2" class="plano" value="8">
                <label for="plano2" class="card mb-4 planol pc">
                    <div class="card-body">
                        <h5 class="card-title">Plano para família: Perfeito para uma viagem tranquila e confortavel.</h5>
                        <p>Entire Guesthouse - CLOSE TO BEACH.</p>
                        <p>Localização: Torrance, 7.6 km até Rodeway Inn & Suites Pacific Coast Highway</p>
                        <p class="card-text">R$ 871,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano3" class="plano" value="9">
                <label for="plano3" class="card mb-4 planol pc">
                    <div class="card-body">
                        <h5 class="card-title">Plano viagem com os amigos: Principal plano para quem quer cutir com os amigos.</h5>
                        <p>Miyako Hybrid Hotel</p>
                        <p>Torrance, 5.0 km até Rodeway Inn & Suites Pacific Coast Highway</p>
                        <p class="card-text">R$ 1,174</p>
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