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
            Nossa casa é uma residência unifamiliar localizada em dois andares e enclave exclusivo na seção sul de Redondo Beach Hollywood Riviera. O bairro ganhou esse nome quando muitos atores e membros da comunidade de Hollywood compraram e construíram casas no local, incluindo a construção e manutenção de um clube de praia exclusivo no Cliff, que remonta aos anos 20 e 30. Uma característica topográfica única da área fornece uma justaposição do tipo “lado do penhasco” de muitas casas nesta pequena comunidade, que lembra um pouco a Riviera Européia. Este local fica na ponta norte da Península de Palos Verdes, localizada em uma colina com vista para a Baía de Santa Monica, incluindo vistas deslumbrantes de todo o "Queens-Necklace".

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
            <p>&nbsp;&nbsp;Itens de segurança: 8.0</p>
        </div>    
        <div class="row lugp">
            <i class="fas fa-pump-medical"></i>
            <p>&nbsp;&nbsp;&nbsp; Limpeza e desinfecção: 8.0</p>
        </div>
        <div class="row lugp">
            <i class="fas fa-people-arrows"></i>
            <p>&nbsp;&nbsp;Distanciamento físico: 8.0</p>
        </div>
        <div class="row lugp">
            <i class="fas fa-utensils"></i>
            <p>&nbsp;&nbsp;&nbsp;Segurança de alimentos e bebidas: 8.0</p>
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