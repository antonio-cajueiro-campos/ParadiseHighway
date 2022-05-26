<?php include 'layout_php/header.php';

if (isset($_SESSION['sessao'])) {
    echo "<META http-equiv=refresh content=0;URL=index.php>";
}

if (isset($_POST['cadastro'])) {
    $nome = $_POST['new-password'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $confsenha = $_POST['confpass'];

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha)) {

        if ($confsenha == $senha) {

            if (cadastrar($nome, $email, $senha)) {
                logar($email, $senha);
                header("Refresh: 0");
            } else {
                echo "<div class='object alert erro'>";
                echo "<p class=erro>Erro ao cadastrar, usuário já cadastrado!</p>";
                echo "</div>";                
            }
            
        } else {
            echo "<div class='object alert erro'>";
            echo "<p class=erro>Senhas não conferem!</p>";
            echo "</div>";
        }

    } else {
        echo "<div class='object alert erro'>";
        echo "<p class=erro>Preencha todos os campos!</p>";
        echo "</div>";
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    if (!empty($email) && !empty($senha)) {

        if (logar($email, $senha)){
            header("location: index.php");
        } else {
            echo "<div class='object alert erro'>";
            echo "<p class=erro>Email ou Senha Incorretos</p>";
            echo "</div>";
        }

    } else {
        echo "<div class='object alert erro'>";
        echo "<p class=erro>Preencha todos os campos!</p>";
        echo "</div>";
    }
}

?>

<div class="container2" id="container2">
    <div class="form2-container sign-up-container">
        <form action="" class="form2" method="post">
            <h1 class="h12">Criar conta</h1>
            <div class="social-container">
                <a class="a2 social" href="#"><i class="fa fa-facebook"></i></a>
                <a class="a2 social" href="#"><i class="fa fa-google"></i></a>
                <a class="a2 social" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <span class="span2">ou use seu email para se registrar</span>
            <input class="input2" type="text" name="new-password" placeholder="Nome">
            <input class="input2" type="email" name="email" placeholder="Email" id="email" onblur="checarEmail()" onfocus="limpar()">
            <input class="input2" type="password" name="password" placeholder="Senha">
            <input class="input2" type="password" name="confpass" placeholder="Confirme sua senha">
            <button id="concluir" name="cadastro" type="submit" class="button2">Cadastrar-se</button>
        </form>

        </div>
        <div class="form2-container sign-in-container">
            <form action="" class="form2" method="post">
                <h1 class="h12">Entrar</h1>
                <div class="social-container">
                    <a class="a2 social" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="a2 social" href="#"><i class="fa fa-google"></i></a>
                    <a class="a2 social" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <span class="span2">ou use sua conta</span>
                <input class="input2" type="email" name="email" placeholder="Email" id="email2" onblur="checarEmail2()" onfocus="limpar2()">
                <input class="input2" type="password" name="password" placeholder="Senha">
                <a class="a2" href="#">Esqueceu sua senha?</a>
                <button id="concluir2" name="login" type="submit" class="button2">Logar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="h12">Já possuo conta</h1>
                    <p class="p2">Para se conectar, entre com as suas informações de login</p>
                    <button class="button3" id="signIn">Entrar!</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="h12">Olá, amigo!</h1>
                    <p class="p2">Venha começar uma jornada conosco!</p>
                    <button class="button3" id="signUp">Cadastrar!</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container2');  
        signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
</script> 

<!-- ========== Conteúdo termina aqui ========== -->
<?php include 'layout_php/footer.php'?>