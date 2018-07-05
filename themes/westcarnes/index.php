
<!-------------------------------------- SLIDER --------------------------------------------------->
<section id="banner">
    <div id="layerslider" style="width:100%; height:672px;">
        <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 11;">                  
            <img  class="ls-bg" src="<?= REQUIRE_PATH; ?>/img/slyde_2.jpeg" alt="Slide background"/>       
            <img src="<?= REQUIRE_PATH; ?>/img/frases.png" alt=""  class="ls-l" style="top:350px;left:170px;white-space: nowrap;" data-ls="durationin:1500;delayin:100;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;"/>
        </div>

        <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 11;">                 
            <img src="<?= REQUIRE_PATH; ?>/img/slyde_3.jpeg"  class="ls-bg" alt="Slide background"/>
            <img src="<?= REQUIRE_PATH; ?>/img/frases.png" alt=""  class="ls-l" style="top:300px;left:270px;white-space: nowrap;" data-ls="durationin:1500;delayin:500;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;"/>
        </div>

        <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 11;">
            <img src="<?= REQUIRE_PATH; ?>/img/slyde_2.jpeg"  class="ls-bg" alt="Slide background"/>
            <img src="<?= REQUIRE_PATH; ?>/img/frases.png"  class="ls-l" style="top:340px;left:100px;white-space: nowrap;" data-ls="durationin:1500;delayin:500;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;" alt=""/>
            <!--<img src="<?= REQUIRE_PATH; ?>/img/faca.png" class="ls-l" style="top:170px;left:450px;white-space: nowrap;" data-ls="durationin:1500;delayin:500;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;" alt=""/>-->
        </div>
    </div>	
    <div class="colo-rgba-slyde"></div>
</section>

<!-- -------------------------SLIDER MOBILE---------------------------- -->
<article class="slideshow container">
    <?php
        require_once 'page/page-slyder.php';
    ?>
</article>
<!-- -------------------------CONTEUDO DO SITE---------------------------- -->       
<main class="main_west container">
    <!-------------------------------------------SECAO QUEM SOMOS --------------------------------------------------------->
    <section class="sec_quem">
        <div class=" content">
            <h1 class="font-zero">Quem Somos</h1>
            <article class="art_quem">
                <div class="header_quem">
                    <div class="line_a column column-4">.</div>
                    <h1 class="titulo_quem column column-4">QUEM SOMOS</h1>
                    <div class="line_b column column-4">.</div>
                </div>    

                <!---------------------------------------------DESCRIÇÃO DE QUEM SOMOS ----------------------------------------------->           
                <div class="desc_quem">
                    <p>
                        Lorem ipsum dolor sit amet, his posse legere id. Nec prima voluptaria posidonium eu,
                        ad quo tale legere epicurei. Has euismod molestiae gloriatur eu. Populo maiestatis ne eos.
                        No eum probo expetenda. 
                    </p>
                    <p>
                        Mei te nisl repudiandae. Vidit elitr nam id, nec voluptatum
                        liberavisse ei. No omittam percipit similique ius, sed te eius doming facilisis. Porro
                        volutpat praesent eos no, ex sed meis quas appellantur, mei ea appetere molestiae. Omnes
                        nostrud gloriatur at quo, no aliquid consulatu mea. Tota labitur ei quo, facete menandri
                        suscipiantur in pri. 
                    </p>

                    <!-- ----------------------------------- LEIA MAIS ------------------------------------------ -->    
                    <a href="<?= HOME; ?>/quem-somos"  class="btn btn_quem_somos">
                        LEIA MAIS
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="sec_produto">
        <div class=" content">
            <h1 class="font-zero">Produtos</h1>
            <article class="art_produtos">
                <a class="box-tipo" href="produtos#bovino">
                    <figure class="thumb-tipo">                                
                        <img src="<?= REQUIRE_PATH; ?>/img/thumb-bovino.png" alt=""/>
                        <div class="box_pdr"></div>
                        <figcaption>
                            <h1>BOVINOS</h1>
                        </figcaption>
                    </figure>
                </a>
                <a class="box-tipo" href="produtos#aves">
                    <figure class="thumb-tipo">                                
                        <img src="<?= REQUIRE_PATH; ?>/img/thumb_one.png" alt=""/>
                        <div class="box_pdr"></div>
                        <figcaption>
                            <h1>AVES</h1>
                        </figcaption>
                    </figure>
                </a>
                <a class="box-tipo" href="produtos#suinos">
                    <figure class="thumb-tipo">                                
                        <img src="<?= REQUIRE_PATH; ?>/img/thumb_tree.png" alt=""/>
                        <div class="box_pdr"></div>
                        <figcaption>
                            <h1>SUINOS</h1>
                        </figcaption>
                    </figure>
                </a>
            </article>
        </div>
    </section>


    <section class="sec_menu_receitas container">
        <h1 class="font-zero">Receitas</h1>
        <img src="<?= REQUIRE_PATH; ?>/img/receitas.png" alt=""/>
        <article class="box_receitas">
            <h1 class="font-zero">Menu Receitas</h1>
            <ul class="menu_receitas">
                <li><a href="<?= HOME; ?>/receitas">BOVINOS</a></li>
                <li><a href="<?= HOME; ?>/receitas">AVES</a></li>
                <li><a href="<?= HOME; ?>/receitas">SUINOS</a></li>
            </ul>
        </article>
    </section>

    <section>

    </section>   

</main>