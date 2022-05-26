<?php
    include_once 'layout_php/configuracao.php';
    include_once 'layout_php/functions.php';
    session_start();
    unset($_SESSION['sessao']);
    session_destroy();
    if (isset($_GET['data'])) {
        $data = $_GET['data'];
        
        if ($data == "deleted") {

            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if (isset($_GET['auth'])) {
                    $self_id = $_GET['auth'];

                    if ($id == $self_id) {
                        
                        $sql = "DELETE FROM usuarios WHERE cd_usuarios = '$id'";

                        if (mysqli_query($conectar, $sql)) {
                            echo "<META http-equiv=refresh content=0;URL=login.php>";
                        } else {
                            echo "<META http-equiv=refresh content=0;URL=login.php?err=00>";
                        }
                    } else {
                        echo "seu id não é o mesmo do requisitado pela autorização, esta ação será informada ao administrador.<br>";
                        tentativa_nao_autoriazada($id);
                    }
                } else {
                    echo "autorização nao encontrada";
                }
            } else {
                echo "id não encontrado";
            }
        } else {
            echo "dados inválido";
        }
    } else {
        header("location: login.php");
    }
?>
