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
                Localizada no coração de Hafnarfjordur, T10 Hotel Iceland é uma ótima base para explorar esta cidade vibrante. A partir daqui, os hóspedes podem aproveitar ao máximo tudo o que a animada cidade tem a oferecer. Com sua localização conveniente, o estabelecimento oferece fácil acesso aos destinos imperdíveis da cidade.
                T10 Hotel Iceland oferece muitas facilidades para enriquecer sua estadia em Hafnarfjordur. Facilidades como Wi-Fi gratuito em todos os quartos, limpeza diária, instalações para pessoas com mobilidade reduzida, sala de bagagens, Wi-Fi nos espaços públicos estão disponíveis para conveniência de cada hóspede.
                Experimente instalações de quarto de alta qualidade durante a sua estadia aqui. Alguns quartos incluem televisão de tela plana, roupa de cama, sofá, toalhas, armário para ajudar os hóspedes a recarregar as baterias após um longo dia. Se você é um entusiasta do fitness ou está apenas procurando uma maneira de relaxar após um dia duro, você será atendido por instalações recreativas, como jardim. Quando você está procurando por uma acomodação confortável e conveniente em Hafnarfjordur, faça do T10 Hotel Iceland sua casa longe de casa.
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
            <p>&nbsp;&nbsp;Itens de segurança: 9.5</p>
        </div>    
        <div class="row lugp">
            <i class="fas fa-pump-medical"></i>
            <p>&nbsp;&nbsp;&nbsp;Limpeza e desinfecção: 8.0</p>
        </div>
        <div class="row lugp">
            <i class="fas fa-people-arrows"></i>
            <p>&nbsp;&nbsp;Distanciamento físico: 8.5</p>
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