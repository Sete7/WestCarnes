<section class="banner container">
    <h1 class="font-zero">Contato</h1>
    <article class="box_quem_somos"> 
        <h1 class="font-zero">Queremos te ouvir</h1>                      
        <img class="img-desk" src="<?= REQUIRE_PATH; ?>/img/banner/banner-trabalhe-conosco.jpg" alt=""/>
        <img class="img-mob" src="<?= REQUIRE_PATH; ?>/img/mobile/banner-mobi-trabalhe.jpg" alt=""/>
    </article>	
</section>

<main class="main_contato trabalhe container">
    <section class="sec_contato">
        <h1 class="font-zero">Queremos te ouvir</h1>
        <article class="desc_contato">
            <h1 class="font-zero">Formulário West Carnes</h1>
            <div class="content">
                <form class="form_contato">
                    <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" class="nome">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" class="email" id="email" >
                    <label for="telefone">TELEFONE</label>
                    <input type="text" name="nome" id="telefone" class="telefone">                            
                    <label for="empresa">EMPRESA</label>
                    <input type="text" name="empresa" id="empresa" class="telefone">                            
                    <label for="segestao">MENSAGEM</label>
                    <textarea id="segestao" class="textSugestao" cols="100" rows="10"></textarea>
                    <label for="segestao">ANEXAR CURRICULUM</label>
                    <input type="file" name="anexar" class="anexar"><br>
                    
                    <input type="submit" name="enviar" class="enviar" value="ENVIAR">
                </form>
            </div>
        </article>
    </section>
</main>

