<?php require_once './app/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>West Carnes</title>      

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700" rel="stylesheet">        
        <link href="<?= INCLUDE_PATH; ?>/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/boot.css" rel="stylesheet" type="text/css"/>        
        <link href="<?= INCLUDE_PATH; ?>/img/favicon.png" rel="shortcut icon">
        <link href="<?= INCLUDE_PATH; ?>/css/estilo.css" rel="stylesheet" type="text/css"/>         
        <link href="<?= INCLUDE_PATH; ?>/css/layerslider.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/media.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-----------------------CABECALHO------------------------------>
        <header class="main_cabecalho container">
            <h1 class="font-zero"> Welcome West Carnes</h1>
            <div class="content">
                <div class="box_menu">
                    <!----------------------LOGO------------------------->              
                    <div class="main_logo">
                        <a href="<?= HOME; ?>/index" class="logo">
                            <img src="<?= REQUIRE_PATH; ?>/img/logo-west.png" class="logo_west" alt="" title="Bem Vindo a West Carnes"/>
                        </a>
                    </div>           

                    <!-------------------------MENU---------------------------->
                    <nav class="main_nav">
                        <h1 class="font-zero">Menu West Carnes</h1>
                        <ul class="menu">
                            <li><a href="<?= HOME; ?>/index" title="Home">Inicial</a></li>
                            <li><a href="<?= HOME; ?>/quem-somos" title="Quem Somos">Quem Somos</a></li>
                            <li><a href="<?= HOME; ?>/produtos" title="Produtos">Produtos</a></li>
                            <li><a href="<?= HOME; ?>/receitas" title="Receitas">Receitas</a></li>
                            <li><a href="<?= HOME; ?>/contato" title="Fale Conosco">Fale Conosco</a></li>
                        </ul>
                    </nav>

                    <!-------------------------MENU MOBILE---------------------------->
                    <div class="box-mobile">
                        <button class="sidebarBtn">
                            <span></span>
                        </button>

                        <nav class="main_nav_mob">
                            <h1 class="font-zero">Navegação segura Mobile</h1>
                            <!----------------------LOGO MOBI------------------------->              
                            <div class="box-logo-mobi">
                                <a href="<?= HOME; ?>/index" class="logo-mobi">
                                    <img src="<?= REQUIRE_PATH; ?>/img/logo-west" class="logo_west" alt="" title="Bem Vindo a West Carnes"/>
                                </a>
                            </div> 

                            <ul class="menu-mobi">
                                <li><a href="<?= HOME; ?>/index" title="Home">Inicial</a></li>
                                <li><a href="<?= HOME; ?>/quem-somos" title="Quem Somos">Quem Somos</a></li>
                                <li><a href="<?= HOME; ?>/produtos" title="Produtos">Produtos</a></li>
                                <li><a href="<?= HOME; ?>/receitas" title="Receitas">Receitas</a></li>
                                <li><a href="<?= HOME; ?>/contato" title="Fale Conosco">Fale Conosco</a></li>
                            </ul>                       
                        </nav>
                    </div>


                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <!-- --------------------------------- conteudo ---------------------------- -->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);
        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!-- --------------------------------- conteudo ---------------------------- -->       


        <!-----------------------------------------------RODAPÉ INDEX------------------------------------------------------>
        <footer class="footer_west container">
            <div class="content">
                <section class="logo_footer column column-3">
                    <h1 class="font-zero">West Carnes Resumo</h1>
                    <a href="<?= HOME; ?>/index" class="lg_footer">
                        <img src="<?= REQUIRE_PATH; ?>/img/logo-footer" alt="" title="West Carnes"/>
                    </a>                
                </section>

                <section class="informe column column-3">
                    <h1 class="font-zero">Informações Extras</h1>
                    <article class="menu_informe">
                        <h1 class="font-zero">Contato, Trabalho e FAQ.</h1>
                        <ul class="menu_footer">
                            <li><a href="<?= HOME; ?>/contato" title="Contato">Contato</a> </li>
                            <li><a href="<?= HOME; ?>/trabalhe-conosco" title="Trabalhe Conosco">Trabalhe Conosco</a> </li>
                            <li><a href="<?= HOME; ?>/faq" title="FAQ">FAQ</a> </li>
                        </ul>
                    </article>                
                </section>

                <section class="social column column-6">                   
                    <h1 class="font-zero">Siga-nos nas redes sociais</h1>

                    <div class="box-rede column column-1">                        
                        <img src="<?= REQUIRE_PATH; ?>/img/line-rede.png" alt="" class="line-rede"/>
                    </div> 

                    <article class="instam column column-5">
                        <h1 class="font-zero">Instagram</h1>                    
                        <a href="https://www.instagram.com/p/Bjs8CSCh90y/?utm_source=ig_share_sheet&igshid=12cj5u262xhkd" target="_blanck">
                            <img src="<?= REQUIRE_PATH; ?>/img/instan.png" alt="" title="Instagram"/>
                            <span title="Instagram"> @WESTCARNES</span>
                        </a>
                        <span></span>
                    </article> 

                    <article class="face column column-6">
                        <h1 class="font-zero">Facebock</h1>                    
                        <a href="https://www.facebook.com/westcarnes" target="_blanck">
                            <img src="<?= REQUIRE_PATH; ?>/img/face.png" alt="" title="Facebook"/>
                            <span title="Facebook"> FB/@WESTCARNES</span>
                        </a>
                    </article>                
                </section>               
                <div class="clear"></div>
            </div>

            <section class="copy column column-12 container">
                <h1 class="font-zero">Todos os direitos reservados</h1>                    
                <p class="txt_copy">WESTCARNES - TODOS OS DIREITOS RESERVADOS <?= date("Y"); ?></p>              
            </section>            
        </footer>

        <script src="<?= REQUIRE_PATH; ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/fontawesome.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/scripts.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/greensock.js" type="text/javascript"></script>        
        <script src="<?= REQUIRE_PATH; ?>/malihu-scroll/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/script-slider-mob.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/filtragem.js" type="text/javascript"></script>
        <script src="<?= REQUIRE_PATH; ?>/js/menu-mobi.js" type="text/javascript"></script>
    </body>
</html>
