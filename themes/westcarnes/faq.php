<section class="banner container">
    <h1 class="font-zero">Contato</h1>
    <article class="box_quem_somos"> 
        <h1 class="font-zero">Queremos te ouvir</h1>                
        <img class="img-desk" src="<?= REQUIRE_PATH; ?>/img/banner/banner-faq.jpg" alt=""/>
        <img class="img-mob" src="<?= REQUIRE_PATH; ?>/img/mobile/banner-mobi-faq.jpg" alt=""/>
    </article>	
</section>

<main class="main_faq container">
    <section class="sec_faq">
        <h1 class="font-zero">Queremos te ouvir</h1>
        <article class="desc_faq">
            <h1 class="font-zero">Formulário West Carnes</h1>
            <div class="content">
                <?php
                    require_once './mailer/form-faq.php';
                ?>
            </div>
        </article>
    </section>
</main>

