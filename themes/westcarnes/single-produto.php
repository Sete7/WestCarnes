<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$produtoController = new ProdutoController();
$imagemController = new ImagemController();
$helper = new Helper();

$listarProdutoUrl = $produtoController->retornaUrlProduto($urlCod);

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
    <main class="main_single_produto container">
        <!----------------------------------------OUTROS------------------------------------------->
        <section class="sec-single-produto">  
            <h1 class="font-zero"><?= $nomeCategoria; ?></h1>
            <div class="content wrap">
                <div class="categoria">
                    <h1 class="titulo-categoria"><?= $nomeCategoria; ?></h1>
                    <ul class="category_list">
                        <?php
                        $listaProdutoCat = $produtoController->listarProdutoCat($codCategoria);
                        foreach ($listaProdutoCat as $ltProdCat):
                            ?>
                                <li><a href="<?= $ltProdCat->getUrl(); ?>" class="category_item ct_active" category="<?= $ltProdCat->getUrl(); ?>"><?= $ltProdCat->getTitulo(); ?></a></li>
                            <?php
                        endforeach;
                        ?>
                    </ul>
                </div>

                <article class="thumb-single-pdr item_produto" id="pescoco" category="pescoco">
                    <div class="border-thumb">
                        <div class="desc-single-produto">
                            <h1><?= $titulo; ?></h1>                               
                        </div>

                        <div class="desc-single-produto">
                            <header class="header_img">  
                                <img src="<?= HOME; ?>/upload/<?= $thumb; ?>" alt=""/>
                            </header>
                        </div>

                        <p>
                            <?= $descricao; ?>
                        </p>
                    </div>
                </article>                    
            </div>
        </section>
    </main>

<?php
endif;
?>
