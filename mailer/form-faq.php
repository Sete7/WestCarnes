<?php

require_once('./mailer/class.phpmailer.php');

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):    
    $nome = utf8_decode(strip_tags(trim($_POST['txtNome'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtEmail'])));
    $phone = utf8_decode(strip_tags(trim($_POST['txtPhone'])));
    $empresa = utf8_decode(strip_tags(trim($_POST['txtEmpresa'])));
    $mensagem = filter_input(INPUT_POST,'txtMsg', FILTER_SANITIZE_STRING);
    
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
        $mailer->AddAddress('suporte@westcarnes.com.br', 'West Carnes');
        $mailer->AddAddress('contato@westcarnes.com.br', 'Junio');        
        $mailer->AddReplyTo('suporte@westcarnes.com.br', 'West Carnes'); //Seu e-mail
        $mailer->Subject = "Formulario Faq"; //Assunto do e-mail 
         //Define o corpo do email
        $mailer->MsgHTML("$mensagem");
        $mailer->Send();
        echo "<script>alert('Sr(a) $nome sua mensagem foi enviada com sucesso! Em breve entraremos em contato!');</script>";
        echo "<script>window.location = 'http://www.westcarnes.com.br/novo/faq'</script>";
        
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }

endif;
?>

<form class="form_faq" name="formFaq" action="" method="POST">
    <h1>Deixe seu elogio, sugestão, reclamação ou dúvida.</h1>
    <label for="nome">NOME</label>
    <input type="text" name="txtNome" id="nome" class="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="txtEmail" class="email" id="email" >
    <label for="telefone">TELEFONE</label>
    <input type="tel" name="txtPhone" id="telefone" class="telefone">                            
    <label for="empresa">EMPRESA</label>
    <input type="text" name="txtEmpresa" id="empresa" class="empresa">                            
    <label for="segestao">MENSAGEM</label>
    <textarea id="segestao" name="txtMsg" class="text-faq" cols="100" rows="10"></textarea>                   

    <input type="submit" name="btnEnviar" class="btn-faq"  onclick="return validarFaq();"  value="ENVIAR">
</form>
