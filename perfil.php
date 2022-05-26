<?php include 'layout_php/header.php'; ?>
<!-- ========== Conteúdo aqui ========== -->

<?php requiredAuth(); ?>
    
<div class="container object">
    <h1 class="lugh1 tt">Atualizar dados</h1>
    <hr class="lughr">
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id_usuario;?>">

        <div class="row text-center perfil">
            <div class="col-md-5">
                <label class=label-form for="nome">Nome: </label>
            </div>
            <div class="col-md-5">
                <input required type="text" name="nome" id="nome" value="<?php echo $nome_usuario; ?>" class="form-control" maxlength="60">
            </div>
        </div>
            
        <div class="row text-center perfil">
            <div class="col-md-5">
                <label class=label-form for="email">Email: </label>
            </div>
            <div class="col-md-5">
                <input required type="email" value="<?php echo $email_usuario; ?>" name="email"  id="email" onblur="checarEmail()" onfocus="limpar()" class="form-control">
                <span id="span2"></span>
            </div>
        </div>

        <div class="row text-center perfil">
            <div class="col-md-5">
                <label class=label-form for="senha">Senha: </label>
            </div>
            <div class="col-md-5">
                <input type="password" placeholder="Digite sua nova senha" autocomplete="new-password" name="senha" id="senha" class="form-control">
            </div>
        </div>

        <div class="row text-center perfil">
            <div class="col-6">
                <input type="submit" id="concluir" name="btn-editar" class="btn btn-outline-warning" value="Atualizar">
            </div>
            <div class="col-6">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id_usuario;?>">
                    <input type="submit" class="btn btn-outline-danger" name="btn-deletar" value="Apagar minha conta">
                </form>
            </div>
        </div>
    
        <?php mysqli_close($conectar);?>
        
            <?php
                if(isset($_POST['btn-deletar'])) {
	
	            $id = $_POST['id'];		

                echo "<div class=notify>";
                echo "<form class=notify-form action='' method=POST>";
                echo "<p class=confirmp>tem certeza que deseja</p>";
                echo "<p class=confirmp>apagar a sua conta?</p>";
                echo "<input type=hidden name=id value=".$id.">";
                echo "<input class=cancelex type=button onclick=location.href=''; value=Cancelar>";
                echo "<input class=confirmex value=Apagar id=confirm type=submit name=delete-confirm>";
                echo "</form>";
                echo "</div>";
                }
            ?>

        <?php
            if (isset($_GET['data'])) {
                $data = $_GET['data'];
        
                if ($data == "updated") {
                    echo "<div class='object alert succ'>";
                    echo "<h2>Dados atualizados com sucesso!</h2>";
                    echo "</div>";
                } elseif ($data == "error") {
                    echo "<div class='object alert error'>";
                    echo "<h2>Erro ao atualizar dados.</h2>";
                    echo "</div>";
                } else {
                    echo "?";
                }
            }
        ?>
    </form>


</div>


<!-- ========== Conteúdo termina aqui ========== -->
<?php include 'layout_php/footer.php'; ?>