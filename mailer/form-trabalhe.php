<?php
require_once './mailer/class.phpmailer.php';

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):
    $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    $phone = utf8_decode(strip_tags(trim($_POST['txtphone'])));    
    $mensage = filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING);
    $arquivo = $_FILES["arquivo"];

    try {

        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet = utf8_decode($mensage);
        $mailer->Host = 'mail.westcarnes.com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@westcarnes.com.br';
        $mailer->Password = 'a1b2c3d4';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
//        $mailer->addAddress('inovepublicidadedf@gmail.com'); // Name is optional ok
        $mailer->AddAddress('administrativo@westcarnes.com.br', 'West Carnes');
        $mailer->AddAddress('contato@westcarnes.com.br', 'Junio');        
        $mailer->AddReplyTo(' administrativo@westcarnes.com.br', 'West Carnes'); //Seu e-mail      ok
        $mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
        $mailer->Subject = "Formulario Trabalhe Conosco"; //Assunto do e-mail 
        //Define o corpo do email
        $mailer->MsgHTML("$mensage");
        $mailer->Send();
        echo "<script>alert('Sr(a) $nome seus dados foram enviados com sucesso! Aguarde o nosso contato!');</script>";
        echo "<script>window.location = 'http://www.westcarnes.com.br/novo/trabalhe-conosco'</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
endif;
?>
<form class="form_contato" name="formTrab" action="" method="POST"  enctype="multipart/form-data">
    <label for="nome">NOME</label>
    <input type="text" name="txtnome" id="nome" class="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="txtemail" class="email" id="email" >
    <label for="telefone">TELEFONE</label>
    <input type="tel" name="txtphone" id="telefone" class="telefone"> 
    <label for="descricao">MENSAGEM</label>
    <textarea id="descricao" class="textSugestao" name="txtmsg" cols="100" rows="10"></textarea>
    <label for="arquivo">ANEXAR CURRICULUM</label>
    <input type="file" name="arquivo" id="arquivo" class="anexar"><br>

    <input type="submit" name="btnEnviar" class="enviar"  onclick="return validaTrabConosco();"   value="ENVIAR">
</form>