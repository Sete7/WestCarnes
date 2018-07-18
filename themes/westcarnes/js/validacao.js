function validar() {
    var nome = form.txtnome.value;
    var email = form.txtemail.value;
    var phone = form.txtfone.value;
    var msg = form.txtmsg.value;

    if (nome == "") {
        alert("Preencha o campo com nome e sobrenome.")
        form.txtnome.focus();
        return false;
    }

    if (email == "") {
        alert("Preencha o campo Email fulano@dominio.com");
        form.txtemail.focus();
        return false;
    }

    if (phone == "") {
        alert("Preencha o campo De Telefone com DD e Prefixo.");
        form.txtfone.focus();
        return false;
    }

    if (msg == "") {
        alert("Por favor! Informe uma sugestão.");
        form.txtmsg.focus();
        return false;
    }
}

 function validarFaq(){
                var nomef = formFaq.txtNome.value;
                var emailf = formFaq.txtEmail.value;
                var phonef = formFaq.txtPhone.value;
                var empresaf = formFaq.txtEmpresa.value;
                var msgf = formFaq.txtMsg.value;

                if (nomef == "") {
                    alert("Preencha o campo com nome completo.");
                    formFaq.txtNome.focus();
                    return false;
                }
                if (emailf == "") {
                    alert("Preencha o campo email com fulano@dominio.com");
                    formFaq.txtEmail.focus();
                    return false;
                }
                if (phonef == "") {
                    alert("Preencha o campo com DDD, prefixo e numero de Telefone.");
                    formFaq.txtPhone.focus();
                    return false;
                }
                if (empresaf == "") {
                    alert("Preencha o campo com nome da Empresa.");
                    formFaq.txtEmpresa.focus();
                    return false;
                }
                if (msgf == "") {
                    alert("Digite sua opinião, sugestão, reclamação e etc.");
                    formFaq.txtMsg.focus();
                    return false;
                }
            }
            
            function validaTrabConosco(){
                 var nomef = formTrab.txtnome.value;
                var emailf = formTrab.txtemail.value;
                var phonef = formTrab.txtphone.value;
                var mensagemf = formTrab.txtmsg.value;
                var arquivof = formTrab.arquivo.value;
                
                if (nomef == "") {
                    alert("Preencha o campo com nome completo.");
                    formTrab.txtnome.focus();
                    return false;
                }
                if (emailf == "") {
                    alert("Preencha o campo email com fulano@dominio.com");
                    formTrab.txtemail.focus();
                    return false;
                }
                if (phonef == "") {
                    alert("Preencha o campo com DDD, prefixo e numero de Telefone.");
                    formTrab.txtphone.focus();
                    return false;
                }
                if (mensagemf == "") {
                    alert("Descreva um mini-curriculum para dar continuidade.");
                    formTrab.txtmsg.focus();
                    return false;
                }
                if (arquivof == "") {
                    alert("É necessário anexar um único curriculum em pdf.");
                    formTrab.arquivo.focus();
                    return false;
                }
            }

