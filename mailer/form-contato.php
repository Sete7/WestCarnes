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
        $mailer->Host = 'mail.westcarnes.com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@westcarnes.com.br';
        $mailer->Password = 'a1b2c3d4';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddReplyTo('contato@westcarnes.com.br', 'West Carnes'); //Seu e-mail
        $mailer->Subject = "Formulario Contato"; //Assunto do e-mail

        $mailer->AddAddress('contato@westcarnes.com.br', 'West Carnes');

        //Define o corpo do email
        $mailer->MsgHTML("$mensagem");
        $mailer->Send();
        echo "<scrpit>alert(Mensagem enviada com sucesso " . $nome . "! Em breve entraremos em contato. Obrigado!);</scrpit>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
endif;
?> 
<form class="form_contato" name="form" method="POST" action="">
    <h1 style="color: #fff;">Informações de Contato</h1>
    <label for="nome">NOME</label>
    <input type="text" name="txtnome" id="nome" class="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="txtemail" class="email" id="email" >
    <label for="telefone">TELEFONE</label>
    <input type="tel" name="txtfone" id="telefone" class="telefone">                            
    <label for="txtmsg">SUGESTÃO</label>
    <textarea id="txtmsg" name="txtmsg" class="textSugestao" cols="100" rows="10"></textarea>

    <input type="submit" name="btnEnviar" class="enviar" onclick="return validaFormContato" value="ENVIAR">
</form>
<script>
   function validaFormContato(){
      var nome = form_contato.txtnome.value;
      
      if(nome == ""){
          alert("Digite em todos os campos");
          form_contato.txtnome.focus();
          return false;
      }
   }
</script>


