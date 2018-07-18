<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$receitaControler = new ReceitaController();
$helper = new Helper();

$listarProdutoUrl = $receitaControler->retornaUrlReceita($urlCod);

if ($listarProdutoUrl == null):
    echo 'Não existe produto cadastrado';

else:
    $codProd = $listarProdutoUrl->getCod();
    $codCategoria = $listarProdutoUrl->getCategoria()->getCod();
    $nomeCategoria = $listarProdutoUrl->getCategoria()->getTitulo();
    $thumb = $listarProdutoUrl->getThumb();
    $titulo = $listarProdutoUrl->getTitulo();
    $descricao = html_entity_decode($listarProdutoUrl->getDescricao());
?>
<div class="banner-single-receita container">
    <div class="box-single-rec">
        <img class="img-desk" src="<?= INCLUDE_PATH; ?>/img/banner/banner-receitas.jpg" alt=""/>
        <img class="img-mob"  src="<?= INCLUDE_PATH; ?>/img/mobile/banner-mobi-receita.jpg" alt=""/>
        <div class="box-single-camada"></div>
    </div>
</div>
<main class="main_single-receitas container">

    <!---------------------------------------------------- DESCRICAO ------------------------------------------------------------>
    <div class="content">         
        <div class="box-desc-receita">
            <div class="desc-receita">
                <div class="des-receita">
                    <img src="../upload/<?= $thumb?>" alt="<?= $titulo?>" style="width: 100%;" title="<?= $titulo?>"/>
                    <div class="box-titulo-sing">
                        <h1 class=""><?= $titulo?></h1>
                    </div>
                </div>                
                <p>
                    <?= $descricao?>
                </p>
            </div>
        </div>

        <!---------------------------------------------------- SIDEBAR ------------------------------------------------------------>
        <div class="box-sidebar"> 
            <h1>Receitas em Destaque</h1>
            <?php
            $listaReceitas = $receitaControler->listarReceitaCat($codCategoria, 0, 6);            
            foreach ($listaReceitas as $r) {
                ?>
                <a href="<?= $r->getUrl();?>" class="sidebar-receita">        
                    <div class="thumb-sidebar">        
                        <div class="img-sidebar">        
                            <img src="<?= HOME; ?>/upload/<?= $r->getThumb();?>" alt=""/>
                        </div>
                        <div class="desc-sid-rec">
                            <span class="cat-tipo-pdr"><?= $nomeCategoria;?></span>
                            <h5 class="titulo-relativo">
                                <?= $r->getTitulo();?>
                            </h5>
                            <p><span>Data:</span> <?= $helper->converteData($r->getData());?></p>
                        </div>        
                    </div>        
                </a>
            
                <?php
            }
            ?>
        </div>
        

    </div>
</main>
<?php
endif;
