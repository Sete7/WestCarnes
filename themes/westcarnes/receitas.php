<div class="banner-receita container">
    <div class="box-banner-rec">
        <img src="<?= REQUIRE_PATH; ?>/img/banner/banner-receitas.jpg" alt=""/>
        <div class="box-camada"></div>
    </div>
</div>
<main class="main_receita container">
    <section class="sec_receita">
        <h1 class="font-zero">Receitas</h1>
        <article class="box-receita">
            <div class="box-titulo-receitas">
                <h1 class=""><i class="fa fa-book"></i> Ultimas Receitas</h1>
            </div>
            <div class="content">
                <?php
                $receitas = array('01' => 'Carne', '02' => 'Carne', '03' => 'Carne', '04' => 'Carne', '05' => 'Carne', '06' => 'Carne', '07' => 'Carne', '08' => 'Carne');
                foreach ($receitas as $key => $value) {
                    ?>
                    <a href="<?= HOME; ?>/single-receita">                    
                        <div class="thumb-receita">
                            <img src="<?= REQUIRE_PATH; ?>/img/carne.jpg" alt=""/>
                        </div>
                        <div class="desc-receita">
                            <spa><?= date("d/m/Y à\s\ H:i"); ?></spa> 
                            <h2>Benefícios da canela para a saúde: confira</h2>
                        </div>
                    </a>
                    <?php
                }
                ?>

                <div class="box-btn-rec">
                    <button class="btn btn-receitas">Veja Mais</button>
                </div>

            </div>
        </article>

    </section>
</main>

