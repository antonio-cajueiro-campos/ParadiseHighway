<h1 class="lugh1 tt"><?php echo $nm_plano; ?></h1>

<hr class="lughr">
<div class="row">
    <div class="col-md-6">
        <div class="row row-title sobre-row text-center">
            <div class="col-12">
                <h4 class="lugh1">Sobre o hotel</h4>
            </div>
        </div>
        <div class="row">
            <p class="lugp">
            Localizado na Rodovia Pacific Coast da Califórnia, o Rodeway Inn & Suites Pacific Coast Highway fica a 11 km do transatlântico Queen Mary e do terminal Queen Mary Queen Mary. Pontos de interesse locais como o Aquário do Pacífico, o mercado Ports O' Call Village e o Porto de Long Beach são facilmente acessíveis a partir deste hotel em Harbor City, Califórnia. As cidades próximas incluem Lomita, Carson, San Pedro, Torrance, Anaheim e o Rancho Palos Verdes.

As praias do sul da Califórnia, como Redondo Beach, Hermosa Beach e Manhattan Beach, ficam 3 a 11 km de distância. O shopping center Del Amo Fashion Center está localizado a apenas 8 km do hotel.

Se você deseja jogar golfe, o Harbor Park Golf Course (campo de golfe) fica a uma curta caminhada do hotel. O Campo de Golfe Dominguez Hills fica a 6,4 km e o Campo de Golfe Los Verdes fica a 13 km de distância.

As comodidades do hotel incluem café e Wi-Fi de alta velocidade gratuitos.

Os viajantes a negócios têm acesso a conveniências como serviços de cópia e fax neste hotel de Harbor City, Califórnia.

Além das comodidades padrão, todos os quartos possuem TV de tela plana, micro-ondas, geladeira, colchões confortáveis, chuveiro com cortina curva, ferro e tábua de passar roupas e TV a cabo. Alguns quartos possuem cafeteira, mesa de trabalho e sofá-cama.
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row row-title text-center">
            <div class="col-12">
                <h4 class="lugh1">Segurança do local</h4>
            </div>
        </div>
        <div class="row lugp">
            <i class="fas fa-hand-sparkles"></i>
            <p>&nbsp;&nbsp;Itens de segurança: 9.0</p>
        </div>    
        <div class="row lugp">
            <i class="fas fa-pump-medical"></i>
            <p>&nbsp;&nbsp;&nbsp; Limpeza e desinfecção: 9.5</p>
        </div>
        <div class="row lugp">
            <i class="fas fa-people-arrows"></i>
            <p>&nbsp;&nbsp;Distanciamento físico: 9.5</p>
        </div>
        <div class="row lugp">
            <i class="fas fa-utensils"></i>
            <p>&nbsp;&nbsp;&nbsp;Segurança de alimentos e bebidas: 10.0</p>
        </div>
        <div class="row row-title text-center">
            <div class="col-12">
                <h4 class="lugh1">Detalhes de preço</h4>
            </div>
        </div>
        <div class="row lugp">
            <p>R$ <?php echo $preco_plano; ?> preço base do ticket.</p>
        </div>
        <div class="row lugp">
            <p>R$ 70.00 reais por diária do hotel.</p>
        </div>        
    </div>
</div>

<div class="row row-title sobre-row text-center">
    <div class="col-12">
        <h4 class="lugh1">Configuração do Ticket</h4>
    </div>
</div>

<form action="" class="config-tik" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <label for="qt-<?php echo $id_plano; ?>">Quantidade de Tickets:</label>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <label for="dia-<?php echo $id_plano; ?>">Quantidade de dias:</label>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <label for="data-<?php echo $id_plano; ?>">Datas disponíveis:</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <input id="qt-<?php echo $id_plano; ?>" type="number" class="camp" value="1" min="1" max="10">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <input id="dia-<?php echo $id_plano; ?>" type="number" class="camp" value="1" min="1" max="30">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 lugp">    
                    <select required id="data-<?php echo $id_plano; ?>" class="camp">
                        <option value="" selected> - Selecione - </option>
                        <option value="30/07/2020">30/07/2020</option>
                        <option value="02/12/2020">02/12/2020</option>
                        <option value="05/03/2021">05/03/2021</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <input type="submit" class="btn btn-success" value="Finalizar Reserva" name="comprar" onclick="adicionarTicket('<?php echo $nm_plano_tk; ?>',document.getElementById('qt-<?php echo $id_plano; ?>').value,'<?php echo $preco_plano; ?>',document.getElementById('dia-<?php echo $id_plano; ?>').value,document.getElementById('data-<?php echo $id_plano; ?>').value,<?php echo $id_plano; ?>, '<?php echo $local_plano; ?>')">
        </div>
    </div>
</form>
<?php
    if (isset($_POST['comprar'])) {
        echo "<META http-equiv=refresh content=0;URL=meus_tickets.php>";
    }
?>