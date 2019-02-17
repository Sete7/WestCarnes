<?php
require_once('./mailer/class.phpmailer.php');

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):
    $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    $telefone = utf8_decode(strip_tags(trim($_POST['txtfone'])));
    $mensagem = filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING);

    try {
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet  = utf8_decode($mensagem);        
        $mailer->Host = 'mail..com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@westcarnes.com.br';
        $mailer->Password = '';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
         $mailer->AddAddress('financeiro@westcarnes.com.br', 'West Carnes');
        $mailer->AddAddress('contato@westcarnes.com.br', 'Junio');        
        $mailer->AddReplyTo('financeiro@westcarnes.com.br', 'West Carnes'); //Seu e-mail        
        $mailer->Subject = "Formulario Contato"; //Assunto do e-mail      

        //Define o corpo do email
        $mailer->MsgHTML("$mensagem");
        $mailer->Send();
        echo "<script>alert('Sr(a) $nome sua mensagem foi enviada com sucesso! Em breve entraremos em contato!');</script>";
        echo "<script>window.location = 'http://www.westcarnes.com.br/novo/contato'</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
endif;
?> 
<div class="error">
    <p class="error" style="display: none;">Campo invalido</p>
</div>
<form class="form_contato" id="form_contato" name="form" method="POST" action="">
    <h1 style="color: #fff;">Informações de Contato</h1>
    <label for="nome">NOME</label>
    <input type="text" name="txtnome" id="nome" class="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="txtemail" class="email" id="email">
    <label for="telefone">TELEFONE</label>
    <input type="tel" name="txtfone" id="telefone" class="telefone" required="">                            
    <label for="txtmsg">SUGESTÃO</label>
    <textarea id="txtmsg" name="txtmsg" class="textSugestao" cols="100" rows="10"></textarea>
    <input type="submit" name="btnEnviar" class="enviar" onclick="return validar()" value="ENVIAR">
</form>
