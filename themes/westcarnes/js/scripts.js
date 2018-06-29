 
 $(document).ready(function(){

      (function($){
            $(window).on("load",function(){
                
                $("#barListaReceitas").mCustomScrollbar({
                    theme:"dark",
                    autoHideScrollbar: true
                });
                
            });
        })(jQuery);


  $( "#forms .tipo li" ).click(function() {    
     
     var tipo = $(this).attr("val");
     $("#forms #inputTipo").val(tipo);

    
  });       
        

   $( "#buscaLoja ul li" ).click(function() {    
   //alert("rafael"); 
    //$("#circuito #listaCircuitos .selected .content").toggle( "blind", 500 );
   // $("#circuito #listaCircuitos article").removeClass("selected")    
    $(this).find(".enderecos").toggle( "blind", 500 );    
    $(this).addClass("selected");
    //$("#circuito #listaCircuitos .selected h3 span").html("");
    //$("#circuito #listaCircuitos .selected h3 span").append("-");
  });
   

  $('#forms ul li').click(function(){ 
      $('#forms ul li').removeClass("selected");
      $(this).addClass("selected");
  });

  $('#buscaLoja .icon-search').click(function(){ 
      $('#buscaLoja #pesquisar').addClass("animated slideInRight");
      $('#buscaLoja img').addClass("animated slideInDown");
      $('#buscaLoja .result').css({'display' : 'block'});             
      $('#buscaLoja form').css({'display' : 'none'});                    
      //$('#forms ul li').css("selected");
  });


    $('#tipoCortesDentro .indice .bovinoLi li').click(function(){      
        //alert($(this).attr("item"));

        $('html, body').animate({
        scrollTop: $('.barContent img').offset().top
        }, 500);

        $('#tipoCortesDentro .paperBar div h2').empty();
        $('#tipoCortesDentro .paperBar div p').empty();
        $('#tipoCortesDentro .indice ul li').removeClass("selected");
        $(this).addClass("selected");
          

        if($(this).attr("item")==1){
          $('#tipoCortesDentro .paperBar div h2').append("Pescoço");
          $('#tipoCortesDentro .paperBar div p').append("Sendo a continuação do peito, é uma carne semelhante, que pode ser usada nos mesmos preparos. É um corte que requer cozimento longo e é indicado para ensopados, cozidos e caldos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/01.jpg");
         
        }
        if($(this).attr("item")==2){
          $('#tipoCortesDentro .paperBar div h2').append("Acém");
          $('#tipoCortesDentro .paperBar div p').append("É o maior e mais macio dos cortes dianteiros do boi. É uma carne relativamente magra, que requer bastante calor e umidade durante o cozimento e fica boa em ensopados, cozidos de panela e picadinhos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/02.jpg");
        }
        if($(this).attr("item")==3){
          $('#tipoCortesDentro .paperBar div h2').append("Peito");
          $('#tipoCortesDentro .paperBar div p').append("Possui uma gordura superficial que impede o ressecamento da carne durante o longo tempo de cozimento exigido. Pode ser usado em caldos, sopas, refogados e cozidos em molho. ");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/03.jpg");
          }
        if($(this).attr("item")==4){
          $('#tipoCortesDentro .paperBar div h2').append("Cupim");
          $('#tipoCortesDentro .paperBar div p').append("Situada no dorso de bois zebuínos originários da Índia, essa carne é fartamente entremeada de gordura e tem sabor único e acentuado. É um corte praticamente desconhecido nos países da Europa, nos Estados Unidos e nos vizinhos Uruguai e Argentina, onde se criam apenas raças europeias. Pede cozimento lento, preferencialmente enrolado em celofane culinário, para que se mantenham os sucos da carne.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/04.jpg");
        }
        if($(this).attr("item")==5){
          $('#tipoCortesDentro .paperBar div h2').append("Fraldinha");
          $('#tipoCortesDentro .paperBar div p').append("Localizada na lateral do boi, é uma peça pequena, porém muito suculenta e macia, apropriada para a churrasqueira, mas também para cozidos de panela, estrogonofe e espetinhos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/05.jpg");
        }
        if($(this).attr("item")==6){
          $('#tipoCortesDentro .paperBar div h2').append("Ponta de contrafilé");
          $('#tipoCortesDentro .paperBar div p').append("Também conhecida como costela de minga, é a carne que reveste as últimas costelas do boi e pertence à categoria dos cortes com mais colágeno. É melhor aproveitada moída ou na churrasqueira.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/06.jpg");
        }
         if($(this).attr("item")==7){
          $('#tipoCortesDentro .paperBar div h2').append("Filé-Mignon");
          $('#tipoCortesDentro .paperBar div p').append('É o mais macio dos cortes bovinos e tem sabor menos acentuado que seus  "vizinhos" alcatra e contrafilé. A peça é um músculo liso e comprido, sem nervos, fibras ou gorduras. Ideal para bifes altos como o tournedor e o medalhão, também pode ser empregado em rosbifes, picadinhos, estrogonofe, assados e refogados.');
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/07.jpg");
        }        
        if($(this).attr("item")==8){
          $('#tipoCortesDentro .paperBar div h2').append("Costela");
          $('#tipoCortesDentro .paperBar div p').append("Também conhecida como costela de ripa ou apenas costela, é a carne que reveste a parte superior da caixa torácica do boi. Com ossos maiores e mais largos, é um corte saboroso que requer longo cozimento, seja no fogão ou na churrasqueira.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/08.jpg");
        }
       
        if($(this).attr("item")==9){
          $('#tipoCortesDentro .paperBar div h2').append("Contrafilé");
          $('#tipoCortesDentro .paperBar div p').append("Também conhecido como entrecôte e bife chorizo, é uma peça grande de onde se origina a bisteca. É ideal para fazer bifes, medalhões e rosbife, podendo ser grelhado no fogão ou na churrasqueira, em alta temperatura e por pouco tempo. Deve ser servido mal passado ou ao ponto.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/09.jpg");
        }
        if($(this).attr("item")==10){
          $('#tipoCortesDentro .paperBar div h2').append("Capa de Filé");
          $('#tipoCortesDentro .paperBar div p').append("É uma carne saborosa e com médio grau de dureza. Com grande quantidade de nervos e espessa camada de gordura, exige bastante tempo de cozimento. Indicada para ser usada moída, em ensopados e picadinhos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/10.jpg");
        }
        if($(this).attr("item")==11){
          $('#tipoCortesDentro .paperBar div h2').append("Alcatra");
          $('#tipoCortesDentro .paperBar div p').append("Junto com filé mignon, o contrafilé e a picanha, essa carne faz parte do quarteto nobre das carnes bovinas. É um corte magro e saboroso, do qual se originam outros cinco cortes: a picanha, a maminha, o miolo de alcatra ou baby beef, o tender steak e o top sirloin. ");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/11.jpg");
        }
        if($(this).attr("item")==12){
          $('#tipoCortesDentro .paperBar div h2').append("Patinho");
          $('#tipoCortesDentro .paperBar div p').append("Carne magra, com fibras macias, ideal para bife à milanesa, escalopes e carne moída, mas pode ser usada também em cozidos, ensopados e picadinhos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/12.jpg");
        }
        if($(this).attr("item")==13){
          $('#tipoCortesDentro .paperBar div h2').append("Coxão Duro");
          $('#tipoCortesDentro .paperBar div p').append("Também conhecido como chã de fora, pois fica na face externa do coxão, é um corte com fibras mais duras e necessita de cozimento mais longo. Apropriado para o preparo de carnes recheadas, cozidos de panela e rosbife, ou moído em refogados e molhos.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/13.jpg");
        }
        if($(this).attr("item")==14){
          $('#tipoCortesDentro .paperBar div h2').append("Coxão Mole");
          $('#tipoCortesDentro .paperBar div p').append("Como o próprio nome diz, faz parte da coxa do boi. Também conhecido como chã de dentro, é o corte constituído das massas musculares da face interna do coxão, separado do patinho, do lagarto e do coxão-duro. Macio, é ideal para assados, ensopados, picadinhos, escalopes, bife a milanesa ou para carne moída. ");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/14.jpg");
        }
        if($(this).attr("item")==15){
          $('#tipoCortesDentro .paperBar div h2').append("Lagarto");
          $('#tipoCortesDentro .paperBar div p').append("Localizada na parte traseira do boi, é a peça que separa o coxão duro do coxão mole. Com fibras longas e duras e gordura externa, é uma carne saborosa e versátil, mas pouco suculenta, ideal para assados e cozidos preferencialmente com molho. ");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/15.jpg");
        }
        if($(this).attr("item")==16){
          $('#tipoCortesDentro .paperBar div h2').append("Músculo Dianteiro");
          $('#tipoCortesDentro .paperBar div p').append("Um dos cortes mais saudáveis do boi, é uma carne fibrosa, saborosa, pobre em gordura, mas rica em colágeno. Seu cozimento pede bastante calor e umidade, sendo indicado para sopas, caldos de carne e carne de panela");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/16.jpg");
        }
        if($(this).attr("item")==17){
          $('#tipoCortesDentro .paperBar div h2').append("Músculo Traseiro");
          $('#tipoCortesDentro .paperBar div p').append("É dessa peça que se extrai o ossobuco, famoso corte redondo, com osso e tutano, que deve ser cozido lenta e longamente. ");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/17.jpg");
        }
        if($(this).attr("item")==18){
          $('#tipoCortesDentro .paperBar div h2').append("Aba de Filé");
          $('#tipoCortesDentro .paperBar div p').append("Também conhecida como bife do vazio. Por ser uma carne extremamente enervada, é própria para ser preparada moída");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/18.jpg");
        }
        if($(this).attr("item")==19){
          $('#tipoCortesDentro .paperBar div h2').append("Maminha");
          $('#tipoCortesDentro .paperBar div p').append("Corte retirado da alcatra, famoso pela maciez, suculência e sabor suave. É uma carne indicada para assados na churrasqueira e no fogão e cozidos de panela.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/19.jpg");
        }
        if($(this).attr("item")==20){
          $('#tipoCortesDentro .paperBar div h2').append("Picanha");
          $('#tipoCortesDentro .paperBar div p').append("Criado na década de 1970, é um corte caracterizado pelo sabor acentuado e maciez, garantidos pela camada de gordura externa que o reveste. Famosa no churrasco, também se presta ao preparo de cozidos e assados no forno e na panela.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/20.jpg");
        }
        if($(this).attr("item")==21){
          $('#tipoCortesDentro .paperBar div h2').append("Paleta");
          $('#tipoCortesDentro .paperBar div p').append("Da pata dianteira do boi, retiram-se três cortes, o peixinho, a raquete e o miolo de paleta. Menos nobres, são carnes suculentas e saborosas, mas que pedem cozimento lento e longo. São cortes indicados para o preparo de picadinhos e cozidos de panela.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortes/21.jpg");
        }

    });

  $('#tipoCortesDentro .indice .avesLi li').click(function(){    

    $('html, body').animate({
        scrollTop: $('.barContent img').offset().top
        }, 500);  
        //alert($(this).attr("item"));
        $('#tipoCortesDentro .paperBar div h2').empty();
        $('#tipoCortesDentro .paperBar div p').empty();
        $('#tipoCortesDentro .indice ul li').removeClass("selected");
        $(this).addClass("selected");
          

        if($(this).attr("item")==1){
          $('#tipoCortesDentro .paperBar div h2').append("Pescoço");
          $('#tipoCortesDentro .paperBar div p').append("É utilizado principalmente em sopas");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/01.jpg");
        }
        if($(this).attr("item")==2){
          $('#tipoCortesDentro .paperBar div h2').append("Peito");
          $('#tipoCortesDentro .paperBar div p').append("São dois peitos por ave. Para ser grelhado é melhor que seja preservado seu tamanho, servindo uma pessoa por peito. <br><br> A Parte que contém mais carne. Dela se tira os filés, a carcaça é aproveitada em caldos. Utilizado frito, cozido, assado, grelhado, recheado. Em pratos como: saladas, assados, molhos, empanados, caldos, sopas, recheio de vários pratos. Desfiada depois de cozida ou até mesmo crua, retirando o filé e os pedaços geralmente cubos ou tiras. Presente em pratos como: Salpicão, estrogonofes, frango xadrez, rolos recheados e outros.");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/02.jpg");
        }
        if($(this).attr("item")==3){
          $('#tipoCortesDentro .paperBar div h2').append("Asas");
          $('#tipoCortesDentro .paperBar div p').append("Possui pouca carne. É bastante utilizada como aperitivo e acompanhamento. É usada para sopas ou feita na grelha, assada ou frita. É bem-vinda em churrascos! A coxinha da assa é a parte que tem mais carne. ");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/03.jpg");
          }
        if($(this).attr("item")==4){
          $('#tipoCortesDentro .paperBar div h2').append("Coxa");
          $('#tipoCortesDentro .paperBar div p').append("É usada principalmente para ensopados, mas também é perfeita para fazer na grelha ou no forno, assada, empanada ou frita. É bem-vinda em churrascos, podendo também ser desfiada.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/04.jpg");
        }
        if($(this).attr("item")==5){
          $('#tipoCortesDentro .paperBar div h2').append("Sobrecoxa");
          $('#tipoCortesDentro .paperBar div p').append("Pode ser frita, assada, grelhada. É utilizada para ensopados, empanadas ou recheadas. Sem a pele e sem o osso. Podendo também ser desfiada.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/05.jpg");
        }
       
         if($(this).attr("item")==6){
          $('#tipoCortesDentro .paperBar div h2').append("Dorso");
          $('#tipoCortesDentro .paperBar div p').append('Corte oposto ao do peito, geralmente com pouco carne. É bem utilizada em sopas, caldos, molhos, para se extrair o sabor e o aroma da carne, que acompanharam outras receitas. Aproveitando também a carne desfiada');
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/06.jpg");
        } 
        if($(this).attr("item")==7){
          $('#tipoCortesDentro .paperBar div h2').append("Miúdos");
          $('#tipoCortesDentro .paperBar div p').append("O coração, a moela e o fígado podem entrar em farofas e molhos. <br> <strong>Coração:</strong> É um ótimo aperitivo, cozido, assado ou grelhado. Também utilizado como prato principal, sopas, caldos e farofa. <br> <strong> Moela: </strong> É também utilizada como aperitivo, bem cozida, por ser um pouco dura. Acompanha sopas, molhos e farofas. <br> <strong> Fígado: </strong> Dele se faz um bom patê. Geralmente se faz cozido, acompanhando os outros pedaços, ou em sopas, caldos, farofas.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/corteaves/07.jpg");
        }        
       
    });


   $('#tipoCortesDentro .indice .suinoLi li').click(function(){      

      $('html, body').animate({
        scrollTop: $('.barContent img').offset().top
        }, 500);
        //alert($(this).attr("item"));
        $('#tipoCortesDentro .paperBar div h2').empty();
        $('#tipoCortesDentro .paperBar div p').empty();
        $('#tipoCortesDentro .indice ul li').removeClass("selected");
        $(this).addClass("selected");
          

        if($(this).attr("item")==1){
          $('#tipoCortesDentro .paperBar div h2').append("Bisteca");
          $('#tipoCortesDentro .paperBar div p').append("É utilizado principalmente em sopas");
          $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/01.jpg");
        }
        if($(this).attr("item")==2){
          $('#tipoCortesDentro .paperBar div h2').append("Copa Lombo");
          $('#tipoCortesDentro .paperBar div p').append("Em função de sua marmorização, a copa-lombo é uma das carnes mais saborosas. Geralmente consumida em bifes ou moída.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/02.jpg");
        }
        if($(this).attr("item")==3){
          $('#tipoCortesDentro .paperBar div h2').append("Coxão Duro");
          $('#tipoCortesDentro .paperBar div p').append("Este é um dos cortes mais saborosos da carne suína. O padrão harmônico da textura da carne de porco torna este corte tão nobre quanto a alcatra.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/03.jpg");
          }
        if($(this).attr("item")==4){
          $('#tipoCortesDentro .paperBar div h2').append("Filé-Mignon");
          $('#tipoCortesDentro .paperBar div p').append("Este corte se presta exatamente às mesmas funções gastronômicas do seu similar bovino; custa, em média, a metade do preço. Seu baixo índice de gordura superficial torna o produto mais atrativo.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/04.jpg");
        }
        if($(this).attr("item")==5){
          $('#tipoCortesDentro .paperBar div h2').append("Panceta");
          $('#tipoCortesDentro .paperBar div p').append("Assim é denominada a carne da barriga pelos italianos. Possui uma boa quantidade de carne e a gordura a deixa suculenta. Pode ser preparada na churrasqueira.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/05.jpg");
        }       
         if($(this).attr("item")==6){
          $('#tipoCortesDentro .paperBar div h2').append("Pé");
          $('#tipoCortesDentro .paperBar div p').append('No Brasil, assim como as orelhas, eles estão incluídos nos pertences e são usados para enriquecer feijoada. Porém, na Europa, os pés do porco ganham receitas mais sofisticadas, servido assado, na França; e recheado, na Itália.');
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/06.jpg");
        } 
        if($(this).attr("item")==7){
          $('#tipoCortesDentro .paperBar div h2').append("Suã");
          $('#tipoCortesDentro .paperBar div p').append("A suã é um item de grande sucesso nos mercados de Minas Gerais, Goiás e de parte do interior de São Paulo.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/07.jpg");
        }        
        if($(this).attr("item")==8){
          $('#tipoCortesDentro .paperBar div h2').append("Pernil");
          $('#tipoCortesDentro .paperBar div p').append("O corte tradicional do pernil inclui alcatra, picanha e maminha e pode tanto ser assado inteiro, como cortado em cubinhos e escalopes. Além disso, cortes nobres como a picanha podem ser usados em churrascos.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/08.jpg");
        } 
        if($(this).attr("item")==9){
          $('#tipoCortesDentro .paperBar div h2').append("Fraldinha");
          $('#tipoCortesDentro .paperBar div p').append("Por estar localizada logo acima da barriga do porco, este corte preserva gordura, que durante o preparo deixa o prato suculento.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/09.jpg");
        } 
        if($(this).attr("item")==10){
          $('#tipoCortesDentro .paperBar div h2').append("Lombo");
          $('#tipoCortesDentro .paperBar div p').append("Naturalmente encarados como cortes magros. Esta peça equivale ao contra-filé no boi.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/10.jpg");
        } 
        if($(this).attr("item")==11){
          $('#tipoCortesDentro .paperBar div h2').append("Ossobuco");
          $('#tipoCortesDentro .paperBar div p').append("Este corte se localiza acima do pé traseiro. Uma das curiosidades sobre o ossobuco é que para ser cortado, o porco deve estar congelado.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/11.jpg");
        } 
        if($(this).attr("item")==12){
          $('#tipoCortesDentro .paperBar div h2').append("Costelinha");
          $('#tipoCortesDentro .paperBar div p').append("Sem dúvida, este é um dos cortes de maior sucesso entre os consumidores da carne de porco.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/12.jpg");
        } 
        if($(this).attr("item")==13){
          $('#tipoCortesDentro .paperBar div h2').append("Papada");
          $('#tipoCortesDentro .paperBar div p').append("Pode ser preparada como bife, no grill, na frigideira ou até mesmo na churrasqueira.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/13.jpg");
        } 
        if($(this).attr("item")==14){
          $('#tipoCortesDentro .paperBar div h2').append("Barriga");
          $('#tipoCortesDentro .paperBar div p').append("O importante deste corte é avaliar o ponto de cozimento. Se ficar bem passado, pode perder a umidade e ressecar demais.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/14.jpg");
        } 
        if($(this).attr("item")==15){
          $('#tipoCortesDentro .paperBar div h2').append("Toucinho");
          $('#tipoCortesDentro .paperBar div p').append("Assim como a picanha bovina, este corte é suculento e preserva a umidade do produto. Versões preparadas nas churrasqueiras são ótimas opções para diversificar no preparo da carne de porco.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/15.jpg");
        } 
        if($(this).attr("item")==16){
          $('#tipoCortesDentro .paperBar div h2').append("Paleta");
          $('#tipoCortesDentro .paperBar div p').append("Retirada da parte dianteira do porco, a paleta pode ser feita assada.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/16.jpg");
        }
        if($(this).attr("item")==17){
          $('#tipoCortesDentro .paperBar div h2').append("Joelho");
          $('#tipoCortesDentro .paperBar div p').append("Apesar de não fazer parte das refeições diários dos brasileiros, o joelho de porco é um corte bastante tradicional.");
           $('#tipoCortesDentro .paperBar img').attr('src', "../assets/imagens/cortesuino/17.jpg");
        }        
       
    });



   // alert("rafael");
    if (windowWidth = window.innerWidth >= 960) {
             $('.img01').parallax("0%", 0.4);
              $('.img02').parallax("2%", -0.3);
              $('#dicas h1').parallax("2%", -0.3);
        } else {
            
        }
   

     $( '#tipoCarne article' ).hover(
            function(){    
                $(this).find('h3').css({'background-color' : 'rgba(142,48,49,0.7)'});  
                $(this).find('a').css({'transform' : 'scale(1.1)'});                         
            },
            function(){
                $(this).find('h3').css({'background-color' : 'rgba(0,0,0,0.5)'});  
                $(this).find('a').css({'transform' : 'scale(1.0)'});         
            }
        ); 

    $( '#tipoCortes ul' ).hover(
            function(){    
                $("#tipoCortes .cortina").fadeIn();      
            },
            function(){
                 $("#tipoCortes .cortina").fadeOut();      
            }
        ); 

    $('.voltarTopo').click(function(){      
        $('html, body').animate({scrollTop : 0}, 1);       
    });

     $(".mmenu-toggle").click(function(){      
        $("#menu").slideToggle();     
     });

     $(".div").each(function(){
       //$(this).outerHeight(true) < 200 ? $(this).css('height','200px') : 0;
    });

      $('#SobreTennessee').each(function(){
        $(this).find(".cortina").css('height', $(this).outerHeight(true)+3);
        var $obj = $(this);
        $(window).scroll(function() {
          var yPos = ($(window).scrollTop() / 15);
           //alert(yPos);
          var ybpos = '50%'+ yPos + '%';                   

          $obj.css('background-position', ybpos );
          $obj.css('background-position-x', 'right' );

        });
      });
       $('#tipoCortes').each(function(){
        $(this).find(".cortina").css('height', $(this).outerHeight(true)-4);
        var $obj = $(this);
        $(window).scroll(function() {
          var yPos = ($(window).scrollTop() / 15);
           //alert(yPos);
          var ybpos = '50%'+ yPos + '%';                  

          $obj.css('background-position', ybpos );
          $obj.css('background-position-x', 'center' );

        });
      });

       // Calling LayerSlider on the target element
        $('#layerslider').layerSlider({
            responsiveUnder : 960,
            layersContainer : 960,
            pauseOnHover: false,
            skinsPath: 'assets/js/plugins/layerslider/skins/',
            navButtons: false
        });
});

 


