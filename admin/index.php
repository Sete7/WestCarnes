<?php
session_start();
ob_start();

require_once '../app/config.php';

//require_once '../Controller/UsuarioController.php';

$usuarioController = new UsuarioController;
$usuarioModel = new Usuario();

$resultado = "";

if ($usuarioController->isLoggedIn()):
    header("Location: dashboard.php");
endif;

$btnLogar = filter_input(INPUT_POST, 'btnLogar', FILTER_SANITIZE_STRING);
if ($btnLogar):
    $email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING); //quando trabalhar com md5 é melhor trabalhar com o filter_default
    $permissao = 1;
    $retorno = $usuarioController->AutenticarUsuario($email, $senha, $permissao);

//    var_dump($retorno);

    if ($retorno != null) {
        $_SESSION["cod"] = $retorno->getCod();
        $_SESSION["nome"] = $retorno->getNome();
        $_SESSION["logado"] = true;

        //se usuário existir, redirecionamento para pagina checkout
        $insertGoTo = 'dashboard.php';
        header("refresh:3;url={$insertGoTo}");
        $resultado = "<div class='alert alert-success'>           
            <span><b>Seja Bem-vindo {$_SESSION["nome"]}, estamos redirecionando para o painel administrativo</b></span>
        </div>";
    } else {
        $resultado = "<div class='alert alert-danger'>           
            <span><b>Ops, erro de usuario ou senha </b></span>
        </div>";
    }
endif;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Login</title>
        <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">Bem-Vindo à West Carnes</h1>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control input-lg" placeholder="E-mail"/>
                        </div>

                        <div class="form-group">
                            <input type="password" name="txtSenha" class="form-control input-lg" placeholder="Senha"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btnLogar" class="btn btn-block btn-lg btn-primary" value="Entrar"/>
                            <span><a href="#">Esquece a Senha?</a></span>
                        </div>

                        <div class="form-group">
                            <?= $resultado; ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
