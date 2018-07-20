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
        $mailer->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
        $mailer->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
        $mailer->CharSet = utf8_decode($mensage);
        $mailer->Host = 'mail.westcarnes.com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@westcarnes.com.br';
        $mailer->Password = 'a1b2c3d4';

        // DADOS DO REMETENTE
        $mailer->Sender = "$email"; // Conta de email existente e ativa em seu domínio
        $mailer->From = "$email"; // Sua conta de email que será remetente da mensagem
        $mailer->FromName = "$nome"; // Nome da conta de email    
        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddAddress('administrativo@westcarnes.com.br', 'West Carnes'); //Seu e-mail             ok
        
        $mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
        // Definição de HTML/codificação
        $mailer->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mailer->Subject = "West Carnes Trabalhe Conosco"; //Assunto do e-mail 
        //Define o corpo do email
        $mailer->Body .= " Nome: " . $_POST['txtnome'] . "<br>";
        $mailer->Body .= " Email: " . $_POST['txtemail'] . "<br>";
        $mailer->Body .= " Telefone: " . $_POST['txtphone'] . "<br>";
        $mailer->Body .= " descricao: " . nl2br($_POST['txtmsg']) . "<br>";

        $mailer->MsgHTML("$mensage");
        $mailer->Send();
        echo "<script>alert('Sr(a) $nome seus dados foram enviados com sucesso! Aguarde o nosso contato!');</script>";
        echo "<script>window.location = 'http://www.westcarnes.com.br/novo/trabalhe-conosco'</script>";
        // Limpa os destinatários e os anexos
        $mailer->ClearAllRecipients();
        // Exibe uma mensagem de resultado do envio (sucesso/erro)
    } catch (phpmailerException $e) {
        echo " Error! Tente novamente mais tarde, obrigado! " . $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
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