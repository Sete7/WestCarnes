<div class="banner-single-receita container">
    <div class="box-single-rec">
        <img src="<?= REQUIRE_PATH; ?>/img/banner/banner-single-receitas4.jpg" alt=""/>
        <div class="box-single-camada"></div>
    </div>
</div>
<main class="main_single-receitas container">
    <div class="des-receita">
        <img src="<?= REQUIRE_PATH; ?>/img/almondegas.jpg" alt="" style="width: 30%;"/>
        <div class="box-titulo-sing">
            <h1 class="">Almôndegas recheadas</h1>
        </div>
    </div>

    <!---------------------------------------------------- DESCRICAO ------------------------------------------------------------>
    <div class="content">
        <div class="box-desc-receita">

            <div class="desc-receita">
                <h1>Ingredientes</h1>
                <p>
                    1 pedaço de patinho de aproximadamente 150g moído duas vezes; <br>
                    3 colheres (sopa) de salsinha picada;<br>
                    6 cenouras cortadas em cubos;<br>
                    6 dentes de alho amassados;<br>
                    1 tablete de caldo de carne;<br>
                    3 xícaras (chá) de abóbora-moranga cortada em cubos;<br>
                    3 xícaras (chá) de repolho rasgado ou picado;<br>
                    2 xícaras (chá) de mandioca cortada em cubos;<br>
                    3 colheres (sopa) de molho de tomate;<br>
                    1 litro de água;<br>
                    5 colheres (sopa) de óleo;<br>
                    1 cebola média picada;<br>
                    Sal e pimenta a gosto  <br>
                </p>
                <h1>Modo de Preparo</h1>
                <p>                    
                    Refogue a carne moída com a cebola, 3 dentes de alho amassados e 3 colheres (sopa) de óleo. Coloque o molho de tomate e tempere com pimenta e o sal. Reserve.<br>

                    Em outra panela, refogue com o alho e o óleo restantes as cenouras e a mandioca. Acrescente 4 xícaras (chá) de água.<br>

                    Tampe a panela e deixe ferver por aproximadamente 30 minutos. Um pouco antes do término do tempo, acrescente a abóbora em cubos e deixe ferver.<br>

                    Com os legumes cozidos e o caldo cremoso, adicione o caldo de carne e mexa com cuidado. Acrescente água até obter um caldo cremoso.<br>

                    Abaixe o fogo, em seguida adicione a salsinha, as folhas de repolho e a carne moída pronta. Mexa com cuidado e deixe ferver por aproximadamente 5 minutos. Desligue o fogo e sirva quente.<br>
                </p>
            </div>
        </div>

        <!---------------------------------------------------- SIDEBAR ------------------------------------------------------------>
        <div class="box-sidebar"> 
            <h1>Receitas em Destaque</h1>
            <?php
                for($i = 1; $i <= 5; $i++){
            ?>
            <a href="#" class="sidebar-receita">        
                <div class="thumb-sidebar">        
                    <div class="img-sidebar">        
                        <img src="<?= REQUIRE_PATH; ?>/img/almondegas.jpg" alt=""/>
                    </div>
                    <div class="desc-sid-rec">
                        <span class="cat-tipo-pdr">Carne</span>
                        <h5 class="titulo-relativo">
                            SALADAS, MOLHOS E ACOMPANHAMENTOS
                            PURÊ DE ABÓBORA
                        </h5>
                        <p><span>por</span> Tereza S.</p>
                    </div>        
                </div>        
            </a>
            <?php
                }
            ?>
        </div>

    </div>
</main>

