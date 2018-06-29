<section class="banner container">
    <h1 class="font-zero">Contato</h1>
    <article class="box_produto"> 
        <h1 class="font-zero">Queremos te ouvir</h1>
        <img src="<?= REQUIRE_PATH; ?>/img/banner/banner-trabalhe-03.png" alt=""/>
    </article>	
</section>

<main class="main_produto container">
    <div class="content">
        <div class="box-produtos wrap">
            <div class="category_list ">

                <a href="#aves" class="category_item ct_active" category="aves">                    
                    <img src="<?= REQUIRE_PATH; ?>/img/icon-aves.png" alt=""/>
                    <!--                    <div class="tipo">
                                            <h1>Aves</h1>
                                        </div>-->
                </a>

                <a href="#suino" class="category_item" category="suino">
                    <img src="<?= REQUIRE_PATH; ?>/img/icon-suino.png" alt=""/>
                    <!--                    <div class="tipo">
                                            <h1>Suinos</h1>
                                        </div>-->
                </a>

                <a href="#bovino" class="category_item" category="bovino">                   
                    <img src="<?= REQUIRE_PATH; ?>/img/icon-bovino.png" alt=""/>
                    <!--                    <div class="tipo">
                                            <h1> Bovinos</h1>
                                        </div>-->
                </a>	

                <a href="#outros" class="category_item" category="outros">                    
                    <img src="<?= REQUIRE_PATH; ?>/img/icon-outros.png" alt=""/>
                    <!--                    <div class="tipo">
                                            <h1>Outros</h1>
                                        </div>-->
                </a>

            </div>

            <!-------------------------SECAO 01 DA PAGINA PRINCIPAL------------- -->
            <div class="lista_produtos">
                <!----------------------------------------AVES------------------------------------------->
                <section class="secao item_produto" id="aves" category="aves">     
                    <?php
                    $aves = array('Peito', 'Asas', 'Coxa', 'Sobrecoxa', 'Miudos');
                    foreach ($aves as $key => $value) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $value; ?></h1>                               
                            </div>
                            <a href="<?= HOME; ?>/single-produto">
                                <header class="header_img">  
                                    <img src="<?= REQUIRE_PATH; ?>/img/aves/0<?php echo $key; ?>.png" alt=""/>
                                </header>
                            </a>
                        </article>

                        <?php
                    }
                    ?>
                </section>

                <!----------------------------------------SUINO------------------------------------------->

                <section class="secao item_produto" id="suino" category="suino">                            
                    <?php
                     $suino = array(
                         '00' => 'Filé-Mignon',
                         '01' => 'Panceta',
                         '02' => 'Pe',
                         '03' => 'Pernil',
                         '06' => 'Lombo',
                         '07' => 'Costelinha',
                         '08' => 'Pacenta',
                         '09' => 'Papada'
                         );
                    foreach ($suino as $key => $value) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $value; ?></h1>                           
                            </div>
                            <a href="<?= HOME; ?>/single-produto">
                                <header class="header_img">  
                                    <img src="<?= REQUIRE_PATH; ?>/img/suino/<?php echo $key; ?>.png" alt=""/>
                                </header>
                            </a>
                        </article>

                        <?php
                    }
                    ?>
                </section>

                <!-----------------------------------------BOVINO-------------------------------------------->
                <section class="secao item_produto" id="bovino" category="bovino"> 
                    <?php
                    $bovina = array('Pescoço', 'Acem', 'Peito', 'Cupin', 'Fraldinha');
                    foreach ($bovina as $key => $value) {
                        ?>
                        <article class="thumb-geral-pdr">                            
                            <div class="desc-produto">                               
                                <h1><?= $value; ?></h1>                    
                            </div>
                            <a href="<?= HOME; ?>/single-produto">
                                <header class="header_img">  
                                    <img src="<?= REQUIRE_PATH; ?>/img/bovino/0<?php echo $key; ?>.png" alt=""/>
                                </header>
                            </a>
                        </article>

                        <?php
                    }
                    ?>
                </section>


                <!----------------------------------------OUTROS------------------------------------------->
                <section class="secao item_produto" id="outros" category="outros">     
                    <?php
                    $outros = array('01' => 'Bacon', '02' => 'Frango Empanado', '03' => 'Linguiça Toscana', '04' => 'Linguiça de Frango', '05' => 'Linguiça Calabresa', '06' => 'Salsicha');
                    foreach ($outros as $key => $value) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $value; ?></h1>                               
                            </div>
                            <a href="<?= HOME; ?>/single-produto">
                                <header class="header_img">  
                                    <img src="<?= REQUIRE_PATH; ?>/img/frango-01.jpg" alt=""/>
                                </header>
                            </a>
                        </article>

                        <?php
                    }
                    ?>
                </section>

            </div>
            <div class="clear"></div> 
        </div>





    </div>   
</main>

