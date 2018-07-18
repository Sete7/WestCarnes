<?php

$categoria = new Categoria();
$categoriaController = new CategoriaController();
$produtoController = new ProdutoController();
?>
<section class="banner container">
    <h1 class="font-zero">Contato</h1>
    <article class="box_produto"> 
        <h1 class="font-zero">Queremos te ouvir</h1>
        <img class="img-desk" src="<?= REQUIRE_PATH; ?>/img/banner/banner-produtos.jpg" alt=""/>
        <img class="img-mob" src="<?= REQUIRE_PATH; ?>/img/mobile/banner-mobi-produto.jpg" alt=""/>
    </article>	
</section>

<main class="main_produto container">
    <div class="content">
        <div class="box-produtos wrap">

            <div class="category_list "> 
                <?php
                $listaCategoria = $categoriaController->ListarCategoria(0, 4);
                foreach ($listaCategoria as $lstBtnMenu):
                    ?>
                    <a href="#<?= $lstBtnMenu->getUrl(); ?>" class="category_item ct_active" category="<?= $lstBtnMenu->getUrl(); ?>">                    
                        <img src="./upload/<?= $lstBtnMenu->getThumb(); ?>" alt=""/>                    
                    </a>
                    <?php
                endforeach;
                ?>
            </div>

            <!-------------------------SECAO 01 DA PAGINA PRINCIPAL------------- -->
            <div class="lista_produtos">
                
                
                <!-----------------------------------------BOVINO-------------------------------------------->
                <section class="secao item_produto" id="bovino" category="bovino"> 
                    <?php
                    $listProd = $produtoController->listarProdutoCat(1);
                    foreach ($listProd as $key) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $key->getTitulo(); ?></h1>                               
                            </div>
                            <a href="<?= HOME; ?>/single-produto/<?= $key->getUrl(); ?>">
                                <header class="header_img">  
                                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $key->getThumb(); ?>&w=380&h=250&zc=0" alt=""/>
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
                    $listProd = $produtoController->listarProdutoCat(2);
                    foreach ($listProd as $key) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $key->getTitulo(); ?></h1>                               
                            </div>
                             <a href="<?= HOME; ?>/single-produto/<?= $key->getUrl(); ?>">
                                <header class="header_img">                                      
                                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $key->getThumb();?>&w=380&h=250&zc=0" alt=""/>
                                </header>
                            </a>
                        </article>
                        <?php
                    }
                    ?>
                </section>
                
                <!----------------------------------------AVES------------------------------------------->
                <section class="secao item_produto" id="aves" category="aves">     
                    <?php
                    $listProd = $produtoController->listarProdutoCat(3);                  
                    foreach ($listProd as $key) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $key->getTitulo(); ?></h1>                               
                            </div>
                            <a href="<?= HOME; ?>/single-produto/<?= $key->getUrl(); ?>">
                                <header class="header_img">  
                                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $key->getThumb(); ?>&w=380&h=250&zc=0" alt=""/>
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
                    $listProd = $produtoController->listarProdutoCat(4);
                    foreach ($listProd as $key) {
                        ?>
                        <article class="thumb-geral-pdr">
                            <div class="desc-produto">
                                <h1><?= $key->getTitulo(); ?></h1>                               
                            </div>
                             <a href="<?= HOME; ?>/single-produto/<?= $key->getUrl(); ?>">
                                <header class="header_img">  
                                    <img src="<?= HOME; ?>/tim.php?src=upload/<?= $key->getThumb(); ?>&w=380&h=250&zc=0" alt=""/>
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

