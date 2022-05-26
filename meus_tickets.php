<?php include 'layout_php/header.php'?>
<!-- ========== Conteúdo aqui ========== -->

<?php requiredAuth(); ?>

<div class="container object">

    <h1 class="lugh1 tt">Tickets de reserva</h1>

    <p class=tik-info>Aqui ficam os tickets de sua(s) reserva(s).</p>
    <p class=tik-info>Guarde os números identificadores e pague quando chegar na recepção para o embarque.</p>

    <div id="ticket" class="ticket"></div>
    
    <div class="row-12">
        <div class=total>Valor que irá ser gasto em todos os tickets: <span class=total id="total">R$</span> </div>
    </div>
            
    <script>
        meusTickets();
    </script>
         
</div>

<!-- ========== Conteúdo termina aqui ========== -->
<?php include 'layout_php/footer.php'?>