<?php include 'layout_php/header.php'?>
<!-- ========== Conteúdo aqui ========== -->

<div class="container object">
    <h1 class="lugh1 tt"><?php echo $nome_pagina; ?></h1>
    
    <div class="row">
        <input type="checkbox" id="img1" class="input-img i1" name="itemCheck">
        <label class="col imgc img1" for="img1" onclick="desativarscroll()">
            <img class=centimagem src="images/Jalapao1.jpg">
        </label>
        <input type="checkbox" id="img2" class="input-img i2" name="itemCheck2">
        <label class="col imgc img2" for="img2" onclick="desativarscroll()">
            <img class=centimagem src="images/Jalapao2.jpg">
        </label>
        <input type="checkbox" id="img3" class="input-img i3" name="itemCheck3">
        <label class="col imgc img3" for="img3" onclick="desativarscroll()">
            <img class=centimagem src="images/Jalapao3.jpg">
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
                    Destino já conhecido pelos apaixonados pelo ecoturismo e turismo de aventura.
                    Localizada no Estado do Tocantins, a região encanta por suas águas abundantes, chapadões e serras com clima de savana,
                    além da paisagem de cerrado, com direito a dunas alaranjadas, rios encachoeirados, nascentes e impressionantes formações rochosas.
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
                <iframe class="yt-video" height="300" src="https://www.youtube.com/embed/ZK2fjrM_HTc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row text-center saib">
        <div class="col-6">
            <a href="https://www.melhoresdestinos.com.br/jalapao-dicas.html" class="semazul">
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
                <input checked type="radio" name="plano" id="plano1" class="plano" value="4">
                <label for="plano1" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano melhor avaliação</h5>
                        <p> 103 Flats </p>
                        <p> Localização: Palmas, 0.7 km até Jalapão Hotel</p>
                        <p class="card-text">R$ 416,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano2" class="plano" value="5">
                <label for="plano2" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano hotel referência</h5>
                        <p> Jalapão Hotel</p>
                        <p>Localização: Palmas, 2.2 km até centro da cidade</p>
                        <p class="card-text">R$ 360,00</p>
                    </div>
                </label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="plano" id="plano3" class="plano" value="6">
                <label for="plano3" class="card mb-4 planol">
                    <div class="card-body">
                        <h5 class="card-title">Plano menor preço</h5>
                        <p>Hostel Alternativa Palmas/jalapao</p>
                        <p>Localização: Palmas, 1.0 km até Jalapão Hotel</p>
                        <p class="card-text">R$ 152,00</p>
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