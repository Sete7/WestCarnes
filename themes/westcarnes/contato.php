<!------------------------------------------------------------------BANNER PAGE CONTATO----------------------------------------->
<section class="banner container">
    <h1 class="font-zero">Contato</h1>
    <article class="box_quem_somos"> 
        <h1 class="font-zero">Queremos te ouvir</h1> 
        <img class="img-desk" src="<?= REQUIRE_PATH; ?>/img/banner/banner-fale-conosco.jpg" alt=""/>
        <img class="img-mob" src="<?= REQUIRE_PATH; ?>/img/mobile/banner-mobi-contato.jpg" alt=""/>
    </article>	
</section>


<!------------------------------------------------------------------CONTEUDO PAGE CONTATO----------------------------------------->
<main class="main_contato container" style="background: #fff;">
    <section class="sec_contato">
        <h1 class="font-zero">Queremos te ouvir</h1>
        <article class="desc_contato">
            <h1 class="font-zero">Formulário West Carnes</h1>
            <div class="content"> 
                <?php
                    require_once './mailer/form-contato.php';
                ?>
            </div>
        </article>
    </section>
</main>    