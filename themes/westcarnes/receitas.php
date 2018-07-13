<?php
$categoriaController = new CategoriaController();
$receitaControler = new ReceitaController();
$helper = new Helper();
?>
<div class="banner-receita container">
    <div class="box-banner-rec">
        <img class="img-desk" src="<?= REQUIRE_PATH; ?>/img/banner/banner-receitas.jpg" alt=""/>
        <img class="img-mob"  src="<?= REQUIRE_PATH; ?>/img/mobile/banner-mobi-receita.jpg" alt=""/>
        <div class="box-camada"></div>
    </div>
</div>
<main class="main_receita container">
    <section class="sec_receita">
        <h1 class="font-zero">Receitas</h1>
        <article class="box-receita">
            <div class="box-titulo-receitas">
                <div class="content">
                    <h1 class=""><i class="fa fa-book"></i> Ultimas Receitas</h1>                    
                </div>
            </div>
            <div class="content">
               <?php
                    $listarCategoria = $categoriaController->ListarTodasCategorias();
                    foreach ($listarCategoria as $listaCat):                  
               ?>
                <div class="categoria-receita">
                    <h1 class="title-categoria"><?= $listaCat->getTitulo(); ?></h1>
                    <?php                        
                        $codCat = $listaCat->getCod();
                        $listaReceitas = $receitaControler->listarReceitaCat($codCat, 0, 4);
                        if($listaReceitas == null):
                        else:
                            foreach($listaReceitas as $r):
                    ?>
                    <a href="<?= HOME; ?>/single-receita">                         
                        <div class="thumb-receita">
                            <img src="<?= HOME; ?>/upload/<?= $r->getThumb();?>" alt=""/>
                        </div>
                        <div class="desc-receita">
                            <spa><?= $r->getData(); ?></spa> 
                            <h2><?= $r->getTitulo();?></h2>
                            <p><?= html_entity_decode($r->getTitulo());?></p>
                        </div>
                    </a>
                </div>
                <?php       endforeach;
                        endif;
                    endforeach;
                ?>


<!--                <div class="box-btn-rec">
                    <button class="btn btn-receitas">Veja Mais</button>
                </div>-->

            </div>
        </article>

    </section>
</main>

